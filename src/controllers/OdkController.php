<?php namespace Odenktools\Coolcms\Controllers;

use Controller;
use View;

class OdkController extends Controller {

	protected $_mainMenu;
	
	function __contruct()
	{
		$this->setupLayout();
	}
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
		
		View::share([
			'mainMenu' 		=> $this->_mainMenu,
			'currentUser' 	=> \Auth::user(),
		]);		
		
	}

}
