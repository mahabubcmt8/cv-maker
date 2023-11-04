<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    function __construct()
    {
        $this->redirectTo = env('ADMIN_URL_PREFIX', 'admin');
        $this->middleware('admin.guest')->except('logout');
        $this->username = $this->findUsername();
    }

    public function findUsername()
    {
        $login = request()->input('login');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }

    public function viewLogin()
    {
        $pageTitle = "Admin Login";
        return view('admin.auth.login', compact('pageTitle'));
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(Request $request)
    {
        // $this->validateLogin($request);
        // if (
        //     method_exists($this, 'hasTooManyLoginAttempts') &&
        //     $this->hasTooManyLoginAttempts($request)
        // ) {
        //     $this->fireLockoutEvent($request);
        //     return $this->sendLockoutResponse($request);
        // }

        // if ($this->attemptLogin($request)) {
        //     return redirect()->route('admin.index');
        //     return $this->sendLoginResponse($request);
        // }

        // $this->incrementLoginAttempts($request);

        // return $this->sendFailedLoginResponse($request);


        $validatedData = $request->validate([
            'email_or_username' => 'required|string',
            'password' => 'required|string',
        ]);
        $fieldType = filter_var($validatedData['email_or_username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $validatedData[$fieldType] = $validatedData['email_or_username'];
        unset($validatedData['email_or_username']);

        if (Auth::guard('admin')->attempt($validatedData)) {
            // Authentication passed...
            return redirect()->route('admin.index');
        }

    return back()->withErrors([
        'email_or_username' => 'The provided credentials do not match our records.',
    ]);
    }


    public function logout(Request $request)
    {
        $this->guard('admin')->logout();
        // $request->session()->invalidate();
        // alert('Hope you`ll back soon!', '', 'info');
        return $this->loggedOut($request) ?: redirect()->route('admin.login.view');
    }
}
