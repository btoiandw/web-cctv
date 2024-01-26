<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        dd($request->all(), $username, $password);

        if ($username == "" && $password == "") {
            return redirect('/');
        } 
        // else {
        //     if ($username == "biw" && $password == "P@ssw0rd11") {
        //         return view('pages.index')->with('success','login successful!');    
        //     }elseif ($username=="biw"&&$password!="P@ssw0rd11") {
        //         return redirect()->with('passerror','Password incorrect!!');
        //     }else{
        //         return redirect()->with('puerror','Usename and Password incorrect!!');
        //     }
        // }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
