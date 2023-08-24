<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/admin';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

//            Route::prefix('admin')
//                ->middleware('auth')
//                ->namespace($this->namespace)
//                ->group(base_path('routes/dashboard.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }
//
//    public function map()
//    {
//        $this->mapApiRoutes();
//        $this->mapAdminRoutes();
//        $this->mapWebRoutes();
//
//        //
//    }
//
//    protected function mapWebRoutes()
//    {
//        Route::middleware('web')
//            ->namespace($this->namespace.'\web')
//            ->as("web::")
//            ->group(base_path('routes/web.php'));
//    }
//
//    protected function mapAdminRoutes()
//    {
//        Route::middleware('web')
//            ->namespace($this->namespace.'\admin')
//            ->domain(env('DOMAIN_ADMIN'))
//            ->as("admin::")
//            ->group(base_path('routes/dashboard.php'));
//    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
