<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;
use App\tbl_loaibomon;
use App\tbl_tintuc;
class TrangchuController extends Controller {
	public function __construct(){
		if (Auth::check()){
			view()->share('nguoidung',Auth::user());
		}
		$loaibomon= tbl_loaibomon::all();
		view()->share('loaibomon',$loaibomon);
		$tintucluyentap=tbl_tintuc::where('idtheloai','=',1)->take(10)->get();
		view()->share('tintucluyentap',$tintucluyentap);
	}
	public  function Trangchu(){
		return view('frontend.main');
	}

	public function getdangnhap(){
		return view("frontend.login");
      	}

   	public function postdangnhap(Request $request){		
			if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>'0'])){
				return redirect("/trangchu");
		
			}else{
				$data["err"] = "Sai email hoặc mật khẩu!";
				return view("admin.login");			
				return redirect("/dangnhap");			
			}

		}
	public function getdangki(){
		return view("frontend.dangki");
      	}
	public function postdangki(Request $request){
		$this->validate($request,[
			'name'=>'required|min:3',
			'email'=>'required|email|unique:users,email',
			'password'=>'required|min:3|max:32',
			'passwordAgain'=>"same:password",
			],[
				'name.required'=>"Bạn chưa nhập tên",
				'name.min'=>"tên bạn phải có ít nhất 3 kí tự",
				'email.required'=>"Bạn chưa nhập email",
				'email.unique'=>"email này đã tồn tại",
				'password.min'=>"mật khẩu phải có 3 kí tự",
				'passwordAgain.same'=>"mật khẩu chưa khớp"
			]);
		$user =new User;
		$user->name=$request->name;
		$user->email=$request->email;
		$user->password=bcrypt($request->password);
		$user->save();
		return redirect('/dangki')->with('thongbao','Chúc mừng bạn đã đăng kí thành công');
		}

}
