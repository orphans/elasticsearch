<?php

namespace Orphans\ElasticSearch\App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

use Elasticsearch\ClientBuilder;

class ElasticSearchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/../../../config/elasticsearch.php');
        $this->publishes([$source => config_path('elasticsearch.php')]);
        $this->mergeConfigFrom($source, 'elasticsearch');
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
