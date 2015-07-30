<?php namespace Odenktools\Coolcms\Models;

use Illuminate\Support\Facades\DB;

class MenuPermission extends CoolcmsModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     *
     */
    protected $table = 'menu_permission';

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     *
     */
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
    }

    public function getAllData(){

        $table = with(new static)->table;

        $result = DB::select("select * from $table");

        $result = $result;

        return $result;
    }
}
