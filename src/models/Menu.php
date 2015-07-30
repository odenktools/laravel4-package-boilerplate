<?php namespace Odenktools\Coolcms\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class Menu extends CoolcmsModel {

    use HasMenuPermission;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table 		= '';

	protected $primaryKey 	= 'id_menu';

	protected $fillable 	= array(
		'menu_title',
		'menu_name',
		'menu_type',
		'js_module_name',
		'menu_route',
		'assets_url',
		'image',
		'active'
	);

    /**
     * Ardent validation rules.
     *
     * @var array
     */
    public static $rules = array(
        'menu_title' 		=> 'required|between:4,128',
        'menu_name' 		=> 'required|between:4,128',
        'menu_type' 		=> 'required|between:4,128',
		'menu_route' 		=> 'required|between:4,128',
		'active' 			=> 'required'
    );

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     *
     */
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		
		//Get table name from config files
		$this->table = $this->prefix . Config::get('coolcms::config.models.menu');
    }

    public function menupermission()
    {
        return $this->belongsToMany('Odenktools\Coolcms\Models\MenuPermission', 'odk_role', 'id_role', 'id_menu');
    }

	public function getAllData(){

		$table = with(new static)->table;

		$result = DB::select("select * from $table");

		$result = $result;

		return $result;
	}
	

}
