<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Interfaces\AssetsInterface;
	use App\Interfaces\CategoriesInterface;
	use Illuminate\Support\Facades\Cache;
	use Illuminate\Http\Request;
	use Illuminate\Http\RedirectResponse;

	class AssetsController extends Controller {
		public $repository;
		public $categories_repository;

		public function __construct(AssetsInterface $repository, CategoriesInterface $categories_repository) {
			$this->repository = $repository;
			$this->categories_repository = $categories_repository;
		}

		public function index() {
			$assets = $this->repository->get_assets();
			return view('assets.index', ['assets' => $assets]);
		}

		public function show($id) {
			$vals = $this->repository->get_asset_by_id($id);
			return view('assets.show', ['vals' => $vals]);
		}

		public function edit($id) {
			$asset = $this->repository->get_asset_by_id($id);
			$categories = $this->categories_repository->get_categories(); //need this for the drop down input box
			return view('assets.edit', ['asset' => $asset, 'categories' => $categories]);
		}

		public function update($request, $id) {
			$this->repository->update_asset($request, $id);
			return redirect('/fixedassets/assets');
		}

		public function create() {
			return view('assets.create');
		}

		public function store($request) {
			$success = $this->repository->add_asset($request);

			if($success) {
				return redirect('/fixedassets/assets');
			} else {
				return redirect('/fixedassets/assets/create')
					->with('error', 'Error:  asset is in use.  Please try another.');
			}
		}

		public function delete($id) {
			$this->repository->delete_asset($id);
			return redirect('/fixedassets/assets');
		}
	}
