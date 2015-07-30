<?php namespace Odenktools\Coolcms\Models;

//use Illuminate\Database\Eloquent\Model as Eloquent;
use LaravelBook\Ardent\Ardent;

class CoolcmsModel extends Ardent
{
    /**
     * Table prefix
     *
     * @var string
     */
    protected $prefix = '';

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $defaultDb = \Config::get('database.default');

        if($defaultDb == 'mysql'){

            // Set the prefix
            $this->prefix = \Config::get('coolcms::config.prefix');
			
			if($this->getTable() != '' ){
				$this->table = $this->prefix.$this->getTable();
			}

            
        }

    }
}
