<?php

namespace App\Providers;

use App\View\Components\Admin\Header as AdminHeader;
use App\View\Components\Admin\Sidebar as AdminSidebar;
use App\View\Components\Admin\Footer as AdminFooter;
use App\View\Components\Footer;
use App\View\Components\Header;
use App\View\Components\Nav;
use Illuminate\Support\Facades\Blade;
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
    Blade::component('admin-header', AdminHeader::class);
    Blade::component('admin-sidebar', AdminSidebar::class);
    Blade::component('admin-footer', AdminFooter::class);
    Blade::component('header', Header::class);
    Blade::component('footer', Footer::class);
    Blade::component('nav', Nav::class);
  }
}
