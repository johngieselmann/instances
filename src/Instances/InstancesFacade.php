<?php

namespace Codebac\Instances;

/**
 * This file is part of Instances, a multi-tenant package for Laravel.
 *
 * @license MIT
 * @package Codebac\Instances
 */

use Illuminate\Support\Facades\Facade;

class InstancesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'instances';
    }
}
