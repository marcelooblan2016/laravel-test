<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{

    protected $table = 'reports';
    protected $connection = 'mysql';

    /**
     * Define primary key
     * @var string
     */
    protected $primaryKey = 'report_id';
    
    /**
     * Disable automatic timestamp of table
     * @var boolean
     */
    public $timestamps = false;

}
