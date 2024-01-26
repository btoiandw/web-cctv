<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        //dd($request->all());
        $username = $request->username;
        $password = $request->password;
       // $hashed =  Crypt::encrypt($password);
        
        
            $user = DB::table('users')->where('username', '=', $username)->find(1);
            $userc = DB::table('users')->where('username', '=', $username)->count();
            //dd($request->all(), $user,$userc, $username, $password);
           if ($userc==1) {
            return 'successful';
           } else {
            return 'login faild';
           }
           
            
        
        
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
