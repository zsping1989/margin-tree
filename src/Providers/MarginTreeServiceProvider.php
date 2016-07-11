<?php

namespace MarginTree\Providers;

use Illuminate\Support\ServiceProvider;
use MarginTree\DbMysqlImplModel;
use MarginTree\NestedSetsService;

class MarginTreeServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //注册
        $this->app->singleton('DbMysqlModel', function($app)
        {
            return new DbMysqlImplModel();
        });
        $this->app->singleton('NestedSetsService', function($app)
        {
            return new NestedSetsService($app['DbMysqlModel']);
        });
    }
    public function provides()
    {
        return ['DbMysqlModel','NestedSetsService'];
    }
}
