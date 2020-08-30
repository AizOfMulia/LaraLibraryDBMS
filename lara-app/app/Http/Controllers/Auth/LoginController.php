<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:staff')->except('logout');
    }

    /**
     *  Show the default login page
     *
     *  @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     *  Show the staff login page
     *
     *  @return \Illuminate\View\View
     */
    public function showStaffLogin()
    {
        return view('auth.login', ['url' => 'staff']);
    }

    /**
     *  Login in staff and validate their information before attempting
     *
     *  @return \Illuminate\Redirect
     */
    public function loginStaff(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);

        if(method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request))
        {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if($this->attemptLoginStaff($request))
            return redirect()->intended('/');

        return back()->withInput($request->only($this->username(), 'remember'));
    }

    /**
     *  Logs out staff account using guard
     *
     *  @return \Illuminate\Redirect
     */
    public function logoutStaff()
    {
        Auth::guard('staff')->logout();
        return redirect()
                ->route('login.show.staff')
                ->with('status', 'Staff has been logged out!');
    }

    /**
     *  Attempts to login in staff accounts
     *
     *  @return bool
     */
    protected function attemptLoginStaff(Request $request)
    {
        return Auth::guard('staff')->attempt(
            $this->credentials($request), $request->filled('remember'));
    }
}
