<?php

namespace App\Http\Controllers;

use App\Daydate;
use App\Hour;
use Illuminate\Http\Request;

class DaydateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Daydate  $daydate
     * @return \Illuminate\Http\Response
     */
    public function show(Daydate $daydate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Daydate  $daydate
     * @return \Illuminate\Http\Response
     */
    public function edit(Daydate $daydate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Daydate  $daydate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daydate $daydate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Daydate  $daydate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daydate $daydate)
    {
        //
    }

    public function getAvailableHours(Request $request){


        $date = date('Y-m-d',strtotime($request->date));

        //we do get all the hours
        $hours = Hour::get('id','hour',DB::raw('true  as available'))->toArray();

        //for each hour we look if there's dates for the day passed by parameter
        foreach($hours as $h){
            $date_count = Daydate::where([
                ['day', '=', $date],
                ['hour_id', '=',$h['id']]
            ])->count();

            //if there's 2, it's not available
            if($date_count == 2)
                $h['available'] = false;
            else
                $h['available'] = true;
        }

        return $hours;

    }
}
