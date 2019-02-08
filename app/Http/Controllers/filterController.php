<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filter;
class filterController extends Controller
{
    public function show_filer_page(){
    	return view('backend.filter');
    }

	public function insert_filter(Request $request){
			$sub_category_id = implode(',',  $request->sub_category_id);
	
			$data = [
				'filter_name' => $request->filter_name,
				'sub_category_id' => $sub_category_id,
				'mete_tag' => isset($request->mete_tag) ? 'Yes' : 'No'
			];

			$success = filter::create($data);
	    	if($success){
	    		return back();
	    	}
    }

}
