<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gig_home_category extends Model
{
	protected $table = 'gig_home_category';
    protected $fillable = [
    	'category_name',
    	'sorting',
    	'status'
    ];
}
