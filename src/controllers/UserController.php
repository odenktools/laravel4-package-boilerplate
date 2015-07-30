<?php namespace Odenktools\Coolcms\Controllers;

use Odenktools\Coolcms\Models\Menu;
use View;


class UserController extends OdkController {
	
	public function getIndex()
	{
		$this->layout = View::make('coolcms::admin.modules.user.index')->with('route_name', 'This is called from UserController');
	}
}
