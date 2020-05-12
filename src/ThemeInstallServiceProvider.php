<?php

namespace I9W3b\ThemeInstall;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use I9W3b\ThemeInstall\Console\ThemeInstallCommand;

/**
 * Class     ThemeInstallServiceProvider
 *
 * @package  I9W3b\ThemeInstall
 * @author   I9W3b <suportemarcelosena@gmail.com>
 */
class ThemeInstallServiceProvider extends ServiceProvider
{

  /**
   * Boot the application events.
   *
   * @return void
   */
  public function boot()
  {
      $this->registerConfig();
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
      $this->commands(ThemeInstallCommand::class);
  }

  /**
   * Register config.
   *
   * @return void
   */
  protected function registerConfig()
  {
      $this->publishes([
           __DIR__.'/../config/config.php' => config_path('themeinstall.php'),
      ], 'themeinstall');
      $this->mergeConfigFrom(
          __DIR__.'/../config/config.php', 'themeinstall'
      );
  }
}
