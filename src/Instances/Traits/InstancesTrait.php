<?php namespace Codebac\Instances\Traits;

use Codebac\Instances\InstancesScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait InstancesTrait {

    /**
     * Boot the tenantable trait for the model
     *
     * @return void
     */
    public static function bootInstanceTrait()
    {
        static::addGlobalScope(new InstancesScope);
    }
}
