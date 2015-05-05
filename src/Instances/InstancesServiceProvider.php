<?php

class InstancesServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . "/../config/config.php" => config_path("instances.php")
        ]);
    }
}
