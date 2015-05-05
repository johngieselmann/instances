<?php

/**
 * This file is part of Instances.
 *
 * @license MIT
 * @package Codebac\Instances
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | Instances Model
    |--------------------------------------------------------------------------
    |
    | This is the Instance model used to create correct relationships. Update
    | the instance if it is in a different namespace.
    |
    */
    "instance" => "App\Instance",

    /*
    |--------------------------------------------------------------------------
    | Instances Table
    |--------------------------------------------------------------------------
    |
    | This is the table used to save instances to the database. Update the
    | table name if it is different.
    |
    */
    "instances_table" => "instances",

    /*
    |--------------------------------------------------------------------------
    | Instances Pivot Column
    |--------------------------------------------------------------------------
    |
    | This is the default interstitial field used for joining on relationships.
    |
    */
    "instances_pivot" => "instance_id",
);
