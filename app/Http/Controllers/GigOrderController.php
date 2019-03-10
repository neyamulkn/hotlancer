<?php

namespace App\Http\Controllers;

use App\gig_order;
use Illuminate\Http\Request;
use DB;
class GigOrderController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function order_details(Request $request)
    {

        $get_gigs = DB::table('gig_basics')
            ->join('gig_prices', 'gig_basics.gig_id', '=', 'gig_prices.gig_id')
            ->Join('gig_images', 'gig_basics.gig_id', '=', 'gig_images.gig_id')
            ->Join('users', 'gig_basics.gig_user_id', '=', 'users.id')
            //->Join('userinfos', 'gig_basics.gig_user_id', '=', 'userinfos.user_id')
            ->select('gig_basics.*', 'gig_prices.*', 'gig_images.image_path', 'users.username', 'users.name')
            ->where([
                ['gig_basics.gig_id', '=', $request->gig_id],
                ['users.id', '=', $request->user_id],
            ])->first();

            $data = [
                'get_gigs' => $get_gigs,
               // 'package' => $package
            ];

            if($request->package == 'basic'){
                $gig_features = DB::table('gig_features')->where('gig_id', $get_gigs->gig_id)->where('feature_basic', 'Yes')->get();
                $package = [
                    
                    'gig_title' => $get_gigs->gig_title,
                    'gig_images' => $get_gigs->image_path,
                    'package_title' => $get_gigs->basic_title,
                    'package_dsc' => $get_gigs->basic_dsc,
                    'delivery_time' => $get_gigs->delivery_time_b,
                    'price' => $get_gigs->basic_p ,
                ];
            }

            if($request->package == 'plus'){
                $gig_features = DB::table('gig_features')->where('gig_id', $get_gigs->gig_id)->where('feature_plus', 'Yes')->get();
                $package = [
                    
                    'gig_title' => $get_gigs->gig_title,
                    'gig_images' => $get_gigs->image_path,
                    'package_title' => $get_gigs->plus_title,
                    'package_dsc' => $get_gigs->plus_dsc,
                    'delivery_time' => $get_gigs->delivery_time_p,
                    'price' => $get_gigs->plus_p,
                ];
            }

            if($request->package == 'super'){
                $gig_features = DB::table('gig_features')->where('gig_id', $get_gigs->gig_id)->where('feature_super', 'Yes')->get();
                $package = [
                    
                    'gig_title' => $get_gigs->gig_title,
                    'gig_images' => $get_gigs->image_path,
                    'package_title' => $get_gigs->super_title,
                    'package_dsc' => $get_gigs->super_dsc,
                    'delivery_time' => $get_gigs->delivery_time_s,
                    'price' => $get_gigs->super_p,
                ];
            }

            if($request->package == 'platinum'){
                $gig_features = DB::table('gig_features')->where('gig_id', $get_gigs->gig_id)->where('feature_platinum', 'Yes')->get();
                $package = [
                    
                    'gig_title' => $get_gigs->gig_title,
                    'gig_images' => $get_gigs->image_path,
                    'package_title' => $get_gigs->platinum_title,
                    'package_dsc' => $get_gigs->platinum_dsc,
                    'delivery_time' => $get_gigs->delivery_time_pm,
                    'price' => $get_gigs->platinum_p,
                ];
            }

            $data = [
                'package' => $package,
                'gig_features' =>  $gig_features
            ];

            return view('frontend.order')->with($data);
            
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert_order(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gig_order  $gig_order
     * @return \Illuminate\Http\Response
     */
    public function show(gig_order $gig_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gig_order  $gig_order
     * @return \Illuminate\Http\Response
     */
    public function edit(gig_order $gig_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gig_order  $gig_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gig_order $gig_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gig_order  $gig_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(gig_order $gig_order)
    {
        //
    }
}
