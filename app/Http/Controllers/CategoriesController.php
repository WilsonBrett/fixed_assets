<?php
//	namespace App\Http\Controllers;
//
//	use App\Http\Controllers\Controller;
//	use App\Interfaces\AssetsInterface;
//	use Illuminate\Support\Facades\Cache;
//	use Illuminate\Http\Request;
//	use Illuminate\Http\RedirectResponse;
//
//	class AssetsController extends Controller {
//		public $repository;
//
//		public function __construct(AssetsInterface $repository) {
//			$this->repository = $repository;
//		}
//
//		public function index() {
//			$assets = $this->repository->get_assets();
//			return view('assets.index', ['assets' => $assets]);
//		}
//
//		public function show($id) {
//			$vals = $this->repository->get_asset_by_id($id);
//			return view('assets.show', ['vals' => $vals]);
//		}
//
//		public function edit($id) {
//			$asset = $this->repository->get_asset_by_id($id);
//			$categories =
//			return view('assets.edit', ['asset' => $asset]);
//		}
//
//		public function update($request, $id) {
//			$this->repository->update_asset($request, $id);
//			return redirect('/fixedassets/assets');
//		}
//
//		public function create() {
//			return view('assets.create');
//		}
//
//		public function store($request) {
//			$success = $this->repository->add_asset($request);
//
//			if($success) {
//				return redirect('/fixedassets/assets');
//			} else {
//				return redirect('/fixedassets/assets/create')
//					->with('error', 'Error:  asset is in use.  Please try another.');
//			}
//		}
//
//		public function delete($id) {
//			$this->repository->delete_asset($id);
//			return redirect('/fixedassets/assets');
//		}
//	}
