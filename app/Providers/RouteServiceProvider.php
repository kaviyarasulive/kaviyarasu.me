<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapFigmaRoutes();

        $this->mapNodejRoutes();

        $this->mapDjangoRoutes();

        $this->mapLaravelRoutes();

        $this->mapStudentRoutes();

        $this->mapManagerRoutes();

        $this->mapAdminRoutes();

        //
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin'],
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    /**
     * Define the "manager" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapManagerRoutes()
    {
        Route::group([
            'middleware' => ['web', 'manager', 'auth:manager'],
            'prefix' => 'manager',
            'as' => 'manager.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/manager.php');
        });
    }

    /**
     * Define the "student" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapStudentRoutes()
    {
        Route::group([
            'middleware' => ['web', 'student', 'auth:student'],
            'prefix' => 'student',
            'as' => 'student.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/student.php');
        });
    }

    /**
     * Define the "laravel" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapLaravelRoutes()
    {
        Route::group([
            'middleware' => ['web', 'laravel', 'auth:laravel'],
            'prefix' => 'laravel',
            'as' => 'laravel.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/laravel.php');
        });
    }

    /**
     * Define the "django" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapDjangoRoutes()
    {
        Route::group([
            'middleware' => ['web', 'django', 'auth:django'],
            'prefix' => 'django',
            'as' => 'django.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/django.php');
        });
    }

    /**
     * Define the "nodej" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapNodejRoutes()
    {
        Route::group([
            'middleware' => ['web', 'nodej', 'auth:nodej'],
            'prefix' => 'nodej',
            'as' => 'nodej.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/nodej.php');
        });
    }

    /**
     * Define the "figma" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapFigmaRoutes()
    {
        Route::group([
            'middleware' => ['web', 'figma', 'auth:figma'],
            'prefix' => 'figma',
            'as' => 'figma.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/figma.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
