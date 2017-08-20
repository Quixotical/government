<?php

namespace App\Providers;

use App\Contracts\Repositories\BillIterationRepositoryContract;
use App\Contracts\Repositories\BillRepositoryContract;
use App\Models\Bill;
use App\Models\BillIteration;
use App\Repositories\BillIterationRepository;
use App\Repositories\BillRepository;
use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BillRepositoryContract::class, function(){
            return new BillRepository(
                new Bill()
            );
        });

        $this->app->bind(BillIterationRepositoryContract::class, function(){
            return new BillIterationRepository(
                new BillIteration()
            );
        });
    }

    /**
     * Array of classes provided as repositories
     *
     * @return array
     */
    public function provides()
    {
        return [
            BillRepositoryContract::class,
            BillIterationRepositoryContract::class,
        ];
    }
}
