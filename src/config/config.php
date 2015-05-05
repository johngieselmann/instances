<?php

/**
 * This is the Instances default config file.
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
    "model" => "App\Instance",

    /*
    |--------------------------------------------------------------------------
    | Instances Table
    |--------------------------------------------------------------------------
    |
    | This is the table used to save instances to the database. Update the
    | table name if it is different.
    |
    */
    "table" => "instances",

    /*
    |--------------------------------------------------------------------------
    | Instances Pivot Column
    |--------------------------------------------------------------------------
    |
    | This is the default interstitial field used for joining on relationships.
    |
    */
    "pivotColumn" => "instance_id",

    /*
    |--------------------------------------------------------------------------
    | Instances Session Key
    |--------------------------------------------------------------------------
    |
    | This is the default session key for storing the user's currently chosen
    | and authenticated instance.
    |
    */
    "sessionKey" => "instanceId",
);
