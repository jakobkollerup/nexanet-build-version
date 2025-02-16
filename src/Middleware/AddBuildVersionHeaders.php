<?php
namespace Nexanet\BuildVersion\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddBuildVersionHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set('X-Build-Version', config('build-version.version'));
        $response->headers->set('X-Minimum-Build', config('build-version.minimum_build', '1.0.0'));

        return $response;
    }
}
