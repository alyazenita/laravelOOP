<?php

namespace App\Http\Middleware;


use Closure;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth ;
class CheckAge
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
        
        $lahir = Auth::user()->birth_date;

        $sekarang = new Carbon.now();

        $beda = $sekarang->diff($lahir);
        $usia = $beda->y;

        dd($usia);
        
        if( $usia > 18  ) {
            return $next($request);
        }else{
            return abort(404) ;
        }
    }
}

