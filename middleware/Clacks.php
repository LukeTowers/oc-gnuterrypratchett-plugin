<?php namespace LukeTowers\GNUTerryPratchett\Middleware;

use Closure;
use Illuminate\Http\Response;

class Clacks
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
        $response = $next($request);

        if ($response instanceof Response) {
            $response->header('X-Clacks-Overhead', 'GNU Terry Pratchett');
        }

        return $response;
    }
}
