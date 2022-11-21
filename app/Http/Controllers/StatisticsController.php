<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatisticsRequest;
use App\Http\Requests\UpdateStatisticsRequest;
use App\Models\Statistics;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customer_id = $request->customer_id;
        $job_id = $request->job_id;
        $client_id = $request->client_id;
        $Backupset = $request->Backupset;
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        $hour = $request->hour;
        $where = [];

        if (isset($customer_id)) {
            $where['customer_id'] =  $customer_id;
        }
        if (isset($job_id)) {
            $where['job_id'] =  $job_id;
        }
        if (isset($client_id)) {
            $where['client_id'] =  $client_id;
        }
        if (isset($client_id)) {
            $where['client_id'] =  $client_id;
        }
        if (isset($Backupset)) {
            $where['Backupset'] =  $Backupset;
        }
        if (isset($hour)) {
            $date_from = $date_from . ' ' . date("h:i:s", strtotime($hour . ':00:00'));
            $date_to = $date_to . ' ' . date("h:i:s", strtotime($hour . ':00:00'));
        }

        $data = [];
        if (isset($date_from) || isset($hour)) {
            if (!$hour) {
                $data = Statistics::where($where)
                    ->whereDate('time_stamp', '>=', $date_from)
                    ->whereDate('time_stamp', '<=', $date_to)
                    ->get();
            } else {
                $data = Statistics::where($where)
                    ->where('time_stamp', '>=', $date_from)
                    ->where('time_stamp', '<=', $date_to)
                    ->get();
            }
        } else {
            $data = Statistics::where($where)->get();
        }

        return response()->json(["Status" => 'Success', 'response' => $data]);
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
     * @param  \App\Http\Requests\StoreStatisticsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatisticsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param  \App\Http\Requests\StoreStatisticsRequest  $request
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistics $statistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatisticsRequest  $request
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatisticsRequest $request, Statistics $statistics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}
