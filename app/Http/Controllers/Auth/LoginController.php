<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
// use App\Models\Fasten;
 
// use Auth;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'user-access:validator'])->except('logout');
        // $this->middleware(['auth', 'user-access:validator'])->except('logout');
        // $this->middleware(['auth', 'user-access:pasienParent'])->except('logout');
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], )))
        {
            if (auth()->user()->stts_approval_user == 'T') {
                Auth::logout();
                return redirect()->route('login')->with('error_log','Akun Anda sudah Terdaftar ✅, tinggal verifikasi');
            } else {
                 if (auth()->user()->type == 'pasienParent'){
                    
                    if (auth()->user()->stts_approval == 'Y') {
                        return redirect()->route('profil');
                    }else{
                        return redirect()->route('profile_user');
                    }

    
                }else if (auth()->user()->type == 'pasienChild'){
                    
                    return redirect()->route('pasienC.home');
    
                }
            }
        }else if(auth('fastens')->attempt(array('email' => $input['email'], 'password' => $input['password'] ))){
        //    if auth('nama') ada di setup "config/auth.php"
        //  huruf besar kecil pakai case sensitive
            // $selamat = "ucapan";
            // dd($selamat);
            // dd(auth('fastens')->user()->type);
            // auth('fastens')->logout();
                    // return redirect()->route('login')->with('error_log','Akun Anda sudah Terdaftar sebagai dokter ✅, tinggal verifikas');
            if (auth('fastens')->user()->type == 'dokter') {
                return redirect()->route('dokter.home');
            }else if (auth('fastens')->user()->type == 'apotik') {
                return redirect()->route('apotik.home');
            }else if (auth('fastens')->user()->type == 'lab'){
                return redirect()->route('lab.home');
            }else if (auth('fastens')->user()->type == 'support'){
                return redirect()->route('support.home');
            }else if (auth('fastens')->user()->type == 'manejemen'){
                return redirect()->route('manej.home');
            }else if (auth('fastens')->user()->type == 'validator'){
                return redirect()->route('validator.home');
            }else if( auth('fastens')->user()->type == 'admin' ){
                return redirect()->route('admin.home');
            }else if( auth('fastens')->user()->type == 'administrator' ){
                return redirect()->route('administrator.home');
            }else if( auth('fastens')->user()->type == 'klinik' ){
                return redirect()->route('klinik.home');
            }
        }
        else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
