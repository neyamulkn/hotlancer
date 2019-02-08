<?php

namespace App;
use App\gig_home_category;
use App\gig_subcategory;
use Illuminate\Database\Eloquent\Model;

class gig_basic extends Model
{
    protected $fillable = [
    	'gig_title',
        'gig_url',
    	'gig_dsc',
    	'category_name',
    	'gig_subcategory',
        'gig_metadata',
    	'gig_payment_type',
    	'gig_search_tag',
    	'gig_user_id',
    	'gig_status'
    ];

    public function get_category(){
        return $this->belongsTo(gig_home_category::class, 'category_name');
    }

    public function get_subcategory(){
        return $this->belongsTo(gig_subcategory::class, 'gig_subcategory');
    }
   
}
