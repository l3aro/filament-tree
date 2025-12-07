<?php

namespace l3aro\FilamentTree\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \l3aro\FilamentTree\FilamentTree
 */
class FilamentTree extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \l3aro\FilamentTree\FilamentTree::class;
    }
}
