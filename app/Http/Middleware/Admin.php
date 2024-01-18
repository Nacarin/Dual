<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
/*      $cachedNumber = Cache::get('stored_number');

        
        $cachedNumber = Cache::get('stored_number');
        //dd($cachedNumber); 
        

        if ($cachedNumber != 5) {
            return response('Acceso no autorizado.', 403);
            //return response()->view('/errors/exception');
        }
*/
        return $next($request);
    }
}
