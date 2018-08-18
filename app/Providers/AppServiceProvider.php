<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Pdf;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */

    /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = true;

  /**
   * Register the application services.
   *
   * @return void
   */
 public function register()
  {
      $this->app->bind(Pdf::class, function ($app) {
          return new Pdf($app['config']['dompdf']);
      });
}
  /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Pdf::class];
    }
}
