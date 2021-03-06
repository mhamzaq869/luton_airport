<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;

class CheckForMaintenanceMode extends \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode
{
    /**
     * The application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (maintenance_mode('check')) {
            if (($request->isMethod('post') && $request->is('subscription/migrate'))
                || ($request->isMethod('post') && $request->is('modules/migrate')) // Required for version <= 3.25.3
                || ($request->isMethod('get') && $request->is('auto-update'))
                || ($request->isMethod('post') && $request->is('api/system/*'))
            ) {
                return $next($request);
            }

            return response(view('errors.down'), 503);
        }

        return $next($request);
    }
}
