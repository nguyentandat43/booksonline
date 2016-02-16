<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hoadon;
class CartController extends Controller {

	public function listcart(){
		$hoadon = Hoadon::select("id","name","email","phone","addreass","status","total_qty","total_price","created_at")->orderBy('id','DESC')->paginate(8);
		return view('backend.cart.list',compact('hoadon'));
	}
	public function delete($id){
		$hoadon = Hoadon::findOrFail($id);
		$hoadon->delete();
		return redirect()->route('admin.cart.getCart')->with(['flash_level' => 'success','flash_message' =>'Xóa đơn hàng thành công']);
	}
	public function update($id){
		$hoadon = Hoadon::findOrFail($id);
		$hoadon->status = 1;
		$hoadon->save();
		echo "oke";
	}
}
