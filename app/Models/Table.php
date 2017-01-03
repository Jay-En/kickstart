<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;



class Table extends \Illuminate\Database\Eloquent\Model {

	use SoftDeletes;

	protected $table;
	protected $guarded = ['id'];
	protected $fillable = ['name','count','date'];
    public $timestamps = false;

    

}