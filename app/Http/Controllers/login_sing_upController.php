<?php
namespace App\Http\Controllers;
use App\Model\contact;
use App\User;
use Hash;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use Session;


/*

 */
class login_sing_upController extends Controller
{
	public function getsingin()
	{

		return view('frontend.user.signin');
	}
	public function getsingup()
	{

		return view('frontend.user.signup');
	}
	public function postsingup(Request $req)
	{

		$this->validate($req,
			[
				'email'=>'required|email|unique:user,email',
				'name'=>'required',
				'password'=>'required|min:6|max:20',
				'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|unique:user,phone',
				're_password'=>'required|same:password'
			],
			[
				'email.required'=>'Please enter your email',
				'email.email'=>'Email invalidate',
				'email.unique'=>'Email already exists',
				'name.required'=>'Please enter your account name',
				'password.required'=>'Please enter a password',
				'phone.required' => 'Please enter the phone number',
				're_password.same'=>'The password is not the same',
				'password.min'=>'Password at least 6 characters',
				'password.max'=>'Password up to 20 characters'
			]);
		$user = new User();
		$user-> name = $req->name;
		$user-> email = $req->email;
		$user-> phone = $req->phone;
		$user-> password = Hash::make($req->password);
		$user->save();
		return redirect()->route('signin')->with('thanhcong','tạo tài khoản thành công');




	}

	public function postsingin(Request $req){

		$this->validate($req,
			[
				'password'=>'required|min:6|max:20',
				'email'=>'required|email'
			],
			[
				'email.required'=>'Please enter your email',
				'email.email'=>'Email invalidate',
				'password.required'=>'Please enter a password',
				'password.min'=>'Password at least 6 characters',
				'password.max'=>'Password up to 20 characters'
			]);
		
		if(Auth::guard('userlogin')->attempt(['email'=>$req->email ,'password'=>$req->password],$req->has('remember'))){
			$id = User::where('email',$req->email)->value('id');
			$name = User::where('email',$req->email)->value('name');
			$email = User::where('email',$req->email)->value('email');
			$phone = User::where('email',$req->email)->value('phone');
			$address = User::where('email',$req->email)->value('address');
			$gender = User::where('email',$req->email)->value('gender');
			$img = User::where('email',$req->email)->value('img');
			$req->session()->put('id',$id);
			$req->session()->put('name',$name);
			$req->session()->put('email',$email);
			$req->session()->put('phone',$phone);
			$req->session()->put('address',$address);
			$req->session()->put('gender',$gender);
			$req->session()->put('img',$img);
			return redirect()->route('home');

		}else{
			return redirect()->back()->with('thongBao','tài khoản hoặc mật khẩu không chính xác');
		}
	}
	public function getlogout(){
		Auth::guard('userlogin')->logout();
		return redirect()->route('home');
	}
	public function getFromResetpassword(){
		
		return view('frontend.user.recovery_password');
	}
	public function sendCodeResetpassword(Request $req){
		$email=$req->email;
		$checkuser = User::where('email',$email)->first();
		if(! $checkuser){
			return redirect()->back()->with('danger','Email không tồn tại');
		}
		$code = bcrypt(md5(time().$email));
		$checkuser->code = $code;
		$checkuser->time_code = Carbon::now();
		$checkuser->save();
		$url = route('reset_password',['code'=>$checkuser->code,'email'=>$email]);
		$data = ['route'=>$url];
		Mail::send('frontend.user.resetpassword', $data, function($message) use ($email){
			$message->to($email,'Reset Password')->subject('lấy lại mật khẩu');
		});
		return redirect()->back()->with('success','link lấy mật khẩu đã được gửi vào email');
	}
	public function Resetpassword(Request $req){
		$code=$req->code;
		$email=$req->email;

		$checkuser = User::where(['code'=>$code,'email'=>$email])->first();
		if(!$checkuser){

			return redirect('/')->with('danger','xin lỗi ! đường dẫn lấy lại mật khẩu không đúng , bạn vui lòng kiểm tra lại');

		}
		return view('frontend.user.reset_password');
	}
	public function SaveResetpassword(Request $req){
		if($req->password){
			$code =$req->code;
			$email =$req->email;
			$checkuser = User::where(['code'=>$code,'email'=>$email])->first();
			if(!$checkuser){

				return redirect('/')->with('danger','xin lỗi ! đường dẫn lấy lại mật khẩu không đúng , bạn vui lòng kiểm tra lại');

			}
			$checkuser->password= bcrypt($req->password);
			$checkuser->save();
			return redirect()->route('signin')->with('success','mật khẩu đã đc thay đổi thành công mời bạn đăng nhập');

		}

	}
	public function getUser($id){
		$user = User::find($id);
		return view('frontend.user.updatetk',compact('user'));
	}

	public function postUser( Request $request,$id){
		$user = new User;
		$a['name'] = $request->name;
		$a['email']= $request->email;
		$a['phone']= $request->phone;
		$a['address']= $request->address;
		$a['gender']= $request->gender;


		if ($request->hasFile('img')) {
			$img = $request->img->getClientOriginalName();
			$a['img'] = $img;
			$request->img->storeAs('avatar',$img);
		}

		$user::where('id',$id)->update($a);
		return redirect()->back()->with('success','cập nhật thành công');
	}
	public function getPassword($id){
		
		return view('frontend.user.password');
	}

	public function postPassword( Request $request,$id){
		if($request->password){
			$rules['password_old']='required';
			$rules['password_comfirm']='required|same:password';
			$messages['password_old.required']='password incorrect please try again';
			$messages['password_comfirm.required']='please,Enter the password again!';
			$messages['password_comfirm.same']='password incorrect, please try again!';
		}
		$request->validate($rules,$messages);
		$user = new User;
		$a['password']= $request->password ? bcrypt($request->password):$user->password;


		$user::where('id',$id)->update($a);
		return redirect()->back()->with('success','cập nhật thành công');
	}

	
	

}
?>
