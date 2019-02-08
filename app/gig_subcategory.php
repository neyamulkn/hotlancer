<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gig_subcategory extends Model
{
    protected $fillable = [
    	'subcategory_name',
    	'category_id',
    	'status'
    ];
}
