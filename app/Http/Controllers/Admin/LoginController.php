<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


    use AuthenticatesUsers;



    protected $redirectTo = '/admin/home';


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('admin');
    }

    protected function authenticated(Request $request, $user)
    {
        $request->session()->put('admin', 'admin_login');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
}