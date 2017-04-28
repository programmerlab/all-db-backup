<?php
namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Dispatcher; 
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;
use Input;
use Redirect; 
use Response;	
use Crypt; 
use View;
use Cookie;
use Closure; 
use Hash;
use URL;
use Validator;
use App\Http\Requests;
use App\Helpers\Helper as Helper;
use Modules\Admin\Models\User;
use Modules\Admin\Http\Requests\LoginRequest;
use App\Admin;
 
class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = 'admin';
	protected $guard = 'admin';
	 
	public function index(User $user, Request $request)
	{  
		
        if(Auth::guard('admin')->check()){  
    		return Redirect::to('admin');
    	}
        return view('packages::auth.login', compact('user'));
	}
 	/* Create Admin user
 	*/
 	public function registration(Request $request)
	{	 
		$input['first_name'] 	= $request->input('name');
    	$input['email'] 		= $request->input('email'); 
    	$input['password'] 	    = Hash::make($request->input('password'));
    	

        //Server side valiation
        $validator = Validator::make($request->all(), [
           	'name'		=> 	'required',
            'email'     =>  'required|email|unique:users',
	        'password' => 'required|min:6',
	        'password_confirmation' => 'required|same:password'
        ]);
        /** Return Error Message **/
        if ($validator->fails()) {
                   	$error_msg	=	[];
                   	$errors = new \StdClass;
	        foreach ( $validator->messages()->messages() as $key => $value) {
	        			  	$errors->$key= $value[0]	;
    		} 
         	return redirect()
                            ->back()
                            ->withInput()  
                            ->withErrors(['errors'=>$errors]); 
        }   
        /** --Create admin-- **/
        $user = Admin::create($input); 

		return view::make('packages::auth.signup-success');
	} 

	public function signUp	()
	{	 
		return view::make('packages::auth.register');
	} 
	
	public function logout(){
		Auth::logout();
		auth()->guard('admin')->logout(); 
		return redirect('admin/login');
	}
	public function login(Request $request)
	{
		$credentials = array('email' => Input::get('email'), 'password' => Input::get('password')); 
        if (Auth::attempt($credentials, true)) {
            return Redirect::to('admin');
        } 
	}

 
}