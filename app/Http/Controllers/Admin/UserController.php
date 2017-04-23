<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\User;
	 use App\Http\myfunctions\functions;
	 use Illuminate\Support\Facades\Auth;
	class UserController extends Controller{
		public function list_user(){
			$arr = User::orderBy('id','desc')->paginate(3);
			return view("admin.user",['arr'=>$arr]);
		}
		
		public function getdangnhapadmin(){
		return view("admin.login");
      	}

   		public function postdangnhapadmin(Request $request){

		
			if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>'1'])){
				return redirect("admin/user");
		
			}else{
				/*$data["err"] = "Sai email hoặc mật khẩu!";
				return view("admin.login");*/
			
				return redirect("admin/dangnhap")->with(['err'=>"Bạn không đủ quyền truy cập hoặc bạn nhập sai mật khẩu"]);;
			
			}
		}
	}
?>