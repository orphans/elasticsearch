<?php

namespace Orphans\ElasticSearch\Support\Facades;

use Illuminate\Support\Facades\Facade;


class ElasticSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'elasticsearch';
    }
}