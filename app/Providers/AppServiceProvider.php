<?php

namespace App\Providers;

use App\Http\Controllers\DataController;
use App\Http\Controllers\JsonController;
use App\Models\Wisa\DataModel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dataController = new DataController();
        $JsonController = new JsonController();
        $data = DataModel::all();

        $dataController->saveToCache();
        $JsonController->functions($data);
        $JsonController->entities($data);
        $JsonController->teams($data);
        $JsonController->regions($data);
    }
}
