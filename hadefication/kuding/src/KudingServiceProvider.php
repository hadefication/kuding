<?php

namespace Hadefication\Kuding;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class KudingServiceProvider extends ServiceProvider
{
    const NAME = 'kuding';

    /**
     * Register
     *
     * @return void
     * @author hadefication
     */
    public function register()
    {
        $this->app->singleton('kuding', function () {
            return $this->app->make('Hadefication\Kuding\Kuding');
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     * @author hadefication
     */
    public function boot()
    {

        $this->mergeConfigFrom(__DIR__.'/config/internals.php', self::NAME);

        $this->loadViewsFrom(__DIR__.'/resources/views', self::NAME);

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', self::NAME);

        $this->loadRoutesFrom(__DIR__.'/routes/kuding.php');

        // Publishables
        $this->publishes([
            __DIR__.'/config/kuding.php' => config_path('kuding.php'),
            __DIR__.'/resources/lang' => resource_path('lang/vendor/kuding'),
            __DIR__.'/resources/assets' => resource_path('assets/vendor/kuding'),
            __DIR__.'/resources/mix/webpack.mix.kuding.js' => base_path('webpack.mix.kuding.js'),
        ]);

        $this->autoload();
    }

    public function autoload()
    {
        $loader = AliasLoader::getInstance();
        $providers = config('kuding.providers');
        $aliases = config('kuding.aliases');

        // Load providers
        foreach ($providers as $key => $provider) {
            $this->app->register($provider);
        }

        // Load facades
        foreach ($aliases as $alias => $facade) {
            $loader->alias($alias, $facade);
        }
    }

}
