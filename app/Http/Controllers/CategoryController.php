<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use DB;
use App\Category;
class CategoryController extends Controller {

	public function getAdd(){
		$data = Category::select('id','name','prarent_id')->orderBy('id','DESC')->get()->toArray();
		return view('backend.category.add',compact('data'));
	}
	public function postAdd(CategoryRequest $request){
		$category = new Category;
		$category->name = $request->txtTieude;
		$category->alias = str_slug($request->txtTieude,"-");
		$category->order = $request->txtThutu;
		$category->prarent_id = $request->parentId;
		$category->keyworks = $request->txtKeyword;
		$category->discription = $request->txtMota;
		$category->save();
		return redirect()->route('admin.category.getList')->with(['flash_level' => 'success','flash_message' => 'Thêm danh mục thành công !!']);;
	}
	public function getList(){
		$listCate = DB::table('categories')->select('id','name','order','prarent_id','keyworks','discription')->orderBy('id','DESC')->paginate(10);
		//$listCate = Category::select("*")->orderBy('id','DESC')->get()->toArray();
		return view('backend.category.list',compact('listCate'));
	}
	public function getDelete($id){
		$parent = Category::where('prarent_id',$id)->count();
		if($parent == 0){
			$cate = Category::find($id);
			$cate->delete($id);
			return redirect()->route('admin.category.getList')->with(['flash_level' => 'success','flash_message' =>'Xóa danh mục thành công']);
		}else{
			return redirect()->route('admin.category.getList')->with(['flash_level' => 'danger','flash_message' =>'Vui lòng xóa hết danh mục con trước']);
		}
	}
	public function getEdit($id){
		$data = Category::findOrFail($id)->toArray();
		$parent = Category::select('id','name','prarent_id')->get()->toArray();
		return view('backend.category.edit',compact('parent','data'));
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			["txtTieude" => "required"],
			["txtTieude.required" => "Tên danh mục kgoonf được bỏ trống"]
		);
		$category = Category::find($id);
		$category->name = $request->txtTieude;
		$category->alias = str_slug($request->txtTieude,"-");
		$category->order = $request->txtThutu;
		$category->prarent_id = $request->parentId;
		$category->keyworks = $request->txtKeyword;
		$category->discription = $request->txtMota;
		$category->save();
		return redirect()->route('admin.category.getList')->with(['flash_level' => 'success','flash_message' => 'Sữa danh mục thành công']);
	}
}
