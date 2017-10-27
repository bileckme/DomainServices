<?php namespace Domain\Services;

use Illuminate\Support\ServiceProvider;

/**
 * Class DomainServicesServiceProvider
 * @package Domain\Services
 */
class DomainServicesServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('domain/services');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['services'];
    }

    /**
     * Gets Laravel Application instance
     * @return \Illuminate\Foundation\Application
     */
    protected function getApp()
    {
        return $this->app;
    }
}
