<?php

namespace Yuga\DataTables\Providers;

use Yuga\Providers\ServiceProvider;
use Yuga\Interfaces\Application\Application;
use Yuga\Providers\Shared\MakesCommandsTrait;

class DataTablesServiceProvider extends ServiceProvider
{
    use MakesCommandsTrait;

    /**
     * Register a service to the application.
     *
     * @param \Yuga\Interfaces\Application\Application
     *
     * @return mixed
     */
    public function load(Application $app)
    {
        
    }

    public function boot()
    {
        
    }
}
