<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Infrustructure\Interfaces\ShortLinkInterface;
use App\Infrustructure\Repository\ShortLinkRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ShortLinkInterface::class,
            ShortLinkRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
