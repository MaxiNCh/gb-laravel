<?php

namespace App\Providers;

use App\Contracts\ParserInterface;
use App\Services\ParserService;
use App\Contracts\SocialInterface;
use App\Services\SocialService;
use Illuminate\Pagination\Paginator;
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
    $this->app->bind(
      ParserInterface::class,
      ParserService::class
    );
    $this->app->bind(
      SocialInterface::class,
      SocialService::class
    );
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Paginator::useBootstrap();
  }
}
