<?php namespace Odenktools\Coolcms\Controllers;

use Odenktools\Coolcms\Models\Menu;
use View;

class MenuController extends OdkController {
	
	public function getIndex()
	{
        $menuPerm = new Menu();

		$this->layout = View::make('coolcms::admin.modules.menu.index')
				->with('route_name', 'This is called from packageview')
				->with('data', $menuPerm->getAllData());
	}
	
	public function getHello()
	{
		$this->layout = View::make('coolcms::admin.modules.menu.hello')->with('route_name','Say Hello To The World');
	}
}
