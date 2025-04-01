<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ComingSoon
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Allow the 'coming-soon' route to be accessible
        // if ($request->is('coming-soon')) {
        //     return $next($request);
        // }

        // // Redirect all other requests to /coming-soon
        // return redirect('/coming-soon');
        
        return $next($request);
    }
}
