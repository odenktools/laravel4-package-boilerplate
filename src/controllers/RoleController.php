<?php namespace Odenktools\Coolcms\Controllers;

use Odenktools\Coolcms\Models\Menu;
use View;

class RoleController extends OdkController {
	
	public function getIndex()
	{
		$this->layout = View::make('coolcms::admin.modules.role.index')
			->with('route_name', 'This is called from RoleController');
	}
	
	public function getHello()
	{
		$this->layout = View::make('coolcms::admin.modules.role.hello')->with('route_name','Say Hello To The World');
	}
}
