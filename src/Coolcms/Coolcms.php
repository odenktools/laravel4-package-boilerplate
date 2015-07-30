<?php namespace Odenktools\Coolcms;

use Closure;
use Illuminate\Support\Facades\Facade;

class Coolcms
{
    /**
     * Laravel application
     *
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }
	
	/**
	 * <code>
	 * use Coolcms;
	 * Coolcms::make();
	 * </code>
	 */
    public function make()
	{
		return 'You call make method';
    }
}
