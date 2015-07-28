<?php

namespace Codebac\Instances;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;
use Illuminate\Support\Facades\Config;
use Session;

class InstancesScope implements ScopeInterface
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if (Session::has(Config::get("instances.sessionKey"))) {
            $instanceId = session(Config::get("instances.sessionKey"));

            $builder->whereHas(Config::get("instances.table"), function($query) use($instanceId) {
                $query->where(Config::get("instances.table") . ".id", $instanceId);
            });
        }
    }

    /**
     * Remove the scope from the given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function remove(Builder $builder, Model $model)
    {
        dd("remove called");
    }
}
