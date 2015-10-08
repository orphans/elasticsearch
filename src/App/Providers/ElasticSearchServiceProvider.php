<?php

namespace Orphans\ElasticSearch\App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

use Elasticsearch\ClientBuilder;

class ElasticSearchServiceProvider extends ServiceProvider
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
    public function register()
    {
        $this->app->singleton('elasticsearch', function($app){
            $es = new ClientBuilder;
            $this->app->instance('elasticsearch', $es->create()->build());
            return $es;
        });
    }
}
