<?php

namespace App\Http\Middleware;

// use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next, $userType)
    public function handle(Request $request, Closure $next, $userType)
    {
        // return $next($request);
        // if(auth('fastens')->user()->type == $userType ){
        //     return $next($request);
        //     }
    //    dd(auth()->check());
       
       if (auth()->check()==true) {
         if(auth()->user()->type == $userType ){
          return $next($request);
          }
        // dd(auth()->user());
       } else {
        // dd(auth('fastens')->user());
        if(auth('fastens')->user()->type == $userType ){
            return $next($request);
            }
        # code...
       }
       

        // if(auth()->user()->type == $userType ){
        //     return $next($request);
        // } else if (auth('fastens')->user()->type == $userType ){
        //     return $next($request);
        // } 
        
        
      


        // if(auth()->check() && auth()->user()->type == $userType && auth()->user()->stts_approval_user == 'Y' ){
        //    Auth::logout();
        //    $request->session()->invalidate();
        //    $request->session()->regenerateToken();
        //     return redirect()->route('login')->with('error','test');
        // }

        // $next($request);


        // $data = array('pesan'=>'Anda tidak memiliki izin untuk mengakses halaman ini.');
        //   return response()->json($data);
        // return response()->json(['err : ']);
        // return redirect()->route('login')
        // ->with('error','System log Refresh, Silahkan Login Sekali lagi.');
        // Auth::logout();  
        // return view('auth.login');
        //  return response()->view('errors.check-permission'); 
    }
}
