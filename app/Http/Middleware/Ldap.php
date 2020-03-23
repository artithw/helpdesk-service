<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Ldap
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       // if( Auth::check() && (Auth::user()->isLdap()=='0') ) {
       //     return $next($request);
       // } else {
       //     abort(403, 'Unauthorized action.');
       // }

        if(Auth::check()) {
            if(Auth::user()->isLdap()=='0') {
                //dd(Auth::user()->isLdap());
                //return '/user/ticket';
                return $next($request);
            }
            elseif(Auth::user()->isLdap()=='2') {
                return '/staff';
            }

            else {
                return '/manage/dashboard';//redirect()->route('home');

            }

        }
        else {
            return redirect()->route('login');
        }
        //return $next($request);
    }
}
