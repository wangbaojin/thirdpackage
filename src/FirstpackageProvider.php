<?php

namespace Wangbaojin\Firstpackage;

use Illuminate\Support\ServiceProvider;

class FirstpackageProvider extends ServiceProvider
{

    protected $defer = true; // 延迟加载服务

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
	    $this->app->singleton('firstpackage', function ($app) {
		    return new Firstpackage($app['config']);
	    });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    // 发布配置文件
	    $this->publishes([
		    __DIR__.'/config/firstpackage.php' => config_path('firstpackage.php'),
	    ]);
    }
}
