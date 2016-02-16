<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\User;
use App\Tintuc;
use Auth;
use Request;
//use Carbon\Carbon;
use App\Http\Requests\TintucRequest;
class TintucController extends Controller {

	public function getAdd(){
		return view('backend.tintuc.add');
	}
	public function postAdd(TintucRequest $request){
		$tintuc = new Tintuc;
		$file_name = $request->file('fileimages')->getClientOriginalName();
		$tintuc->name = $request->txtten;
		$tintuc->alias = str_slug($request->txtten);
		$tintuc->intro = $request->txtndhienthi;
		$tintuc->content = $request->txtndchitiet;
		$tintuc->image = $file_name;
		$tintuc->keyword = $request->txtkeyword;
		$tintuc->description = $request->txtmota;
		$tintuc->user_id = Auth::user()->id;
		$request->file('fileimages')->move('public/upload/tintuc/',$file_name);
		$tintuc->save();
		return redirect()->route('admin.tintuc.getList')->with(['flash_level' => 'success','flash_message' =>'Thêm bài viết thành công']);
	}
	public function getList(){
		$tintuc = Tintuc::all();
		return view('backend.tintuc.list',compact('tintuc'));
	}
	public function delete($id){
		$tintuc = Tintuc::find($id);
		$tintuc->delete();
		return redirect()->route('admin.tintuc.getList')->with(['flash_level' => 'success','flash_message' =>'Xóa bài viết thành công']);
	}
	public function getEdit($id){
		$tintuc = Tintuc::find($id)->first();
		return view('backend.tintuc.edit',compact('tintuc'));
	}
	public function postEdit($id,Request $request){
		$tintuc = Tintuc::find($id);
		$img_current = 'public/upload/tintuc/'.Request::input('img_current');
		$tintuc->name = Request::input('txtten');
		$tintuc->alias = str_slug(Request::input('txtten'));
		$tintuc->intro = Request::input('txtndhienthi');
		$tintuc->content = Request::input('txtndchitiet');
		$tintuc->keyword = Request::input('txtkeyword');
		$tintuc->description = Request::input('txtmota');
		$tintuc->user_id = Auth::user()->id;
		if(!empty(Request::file('fileimages'))){
			$file_name = Request::file('fileimages')->getClientOriginalName();
			$tintuc->image = $file_name;
			Request::file('fileimages')->move('public/upload/tintuc/',$file_name);
			if(File::exists($img_current)){
				File::delete($img_current);
			}
		}
		$tintuc->save();
		return redirect()->route('admin.tintuc.getList')->with(['flash_level' => 'success','flash_message' =>'Sữa bài viết thành công']);
	}
}
