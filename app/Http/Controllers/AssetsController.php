<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Interfaces\AssetsInterface;
	use App\Interfaces\CategoriesInterface;
	use Illuminate\Support\Facades\Cache;
	use Illuminate\Http\Request;
	use Illuminate\Http\RedirectResponse;
	use App\Http\Requests\StoreAsset;
	use App\Http\Requests\UpdateAsset;

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
			$categories = $this->categories_repository->get_categories(); //need this for the drop down select list
			return view('assets.edit', ['asset' => $asset, 'categories' => $categories]);
		}

		public function update(UpdateAsset $request, $id) {
			$this->repository->update_asset($request, $id);
			return redirect('/assets');
		}

		public function create() {
			$categories = $this->categories_repository->get_categories(); //need this for the drop down select list
			return view('assets.create', ['categories' => $categories]);
		}

		public function store(StoreAsset $request) {
			$this->repository->add_asset($request);
			return redirect('/assets');
		}

		public function delete($id) {
			$this->repository->delete_asset($id);
			return redirect('/assets');
		}
	}
