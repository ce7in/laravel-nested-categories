<?php

namespace Ce7in\NestedCategories\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ce7in\NestedCategories\NestedCategories
 */
class NestedCategories extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ce7in\NestedCategories\NestedCategories::class;
    }
}
