# elasticsearch

Laravel 5.1 Service Wrapper and Facade for elasticsearch/elasticsearch.

## Installation

Add the following to your `composer.json` file:

    {
        "require" : {
            "orphans/elasticsearch" : "dev-master"
        }
    }


Then install/update your composer project as normal.

Add the following line to you providers in `config/app.php`:

    Orphans\ElasticSearch\App\Providers\ElasticSearchServiceProvider::class,

Add the following line to you facades in `config/app.php`:

    'ES' => Orphans\ElasticSearch\Support\Facades\ElasticSearch::class,
