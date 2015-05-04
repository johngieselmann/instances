<?php namespace Codebac\Instances\Traits;

use InstancesScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
/**
 * A trait for returning data by instance.
 */
trait InstancesTrait {

    /**
     * Boot the tenantable trait for the model
     *
     * @return void
     */
    public static function bootInstanceTrait()
    {
        static::addGlobalScope(new InstanceScope);
    }
}
