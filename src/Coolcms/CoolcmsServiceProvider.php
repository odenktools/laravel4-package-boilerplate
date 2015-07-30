<?php namespace Odenktools\Coolcms;

use Illuminate\Support\ServiceProvider;

class CoolcmsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//$this->package('odenktools/coolcms', 'coolcms', __DIR__.'/../');

        $this->package('odenktools/coolcms', 'coolcms');
		
		\View::addNamespace('coolcms', __DIR__.'/../views');

        \Config::addNamespace('coolcms', __DIR__.'/../config');
		
		//$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		//$loader->alias('coolcms', 'odenktools\coolcms\CoolcmsFacade');
		
		include __DIR__.'/../routes.php';
		
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->registerCoolcms();
	}
	
    /**
	 * Register the application bindings.
	 * @return void
	 */
	private function registerCoolcms()
	{
		$this->app->bind('coolcms', function ($app) {
            return new Coolcms($app);
        });
		
		$this->app['coolcms'] = $this->app->share(function($app)
		{
			return new Coolcms($app);
		});		
	}
	
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('coolcms');
	}

}
