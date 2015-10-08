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
            $client = $es->create()->build();
            $this->app->instance('elasticsearch', $client);
            return $client;
        });
    }
}
