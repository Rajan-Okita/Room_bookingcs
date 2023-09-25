<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SlotsController extends Controller
{

    public function empty_locations(Request $request)
    {

        $targetDay = $request->input('target_day');
        $targetStartTime = $request->input('start_time');
        $targetEndTime = $request->input('end_time');


        $emptyLocations = Admin::query()
            ->where('days', $targetDay)
            ->whereNotIn('id', function ($query) use ($targetStartTime, $targetEndTime, $targetDay) {
                $query->select('id')
                    ->from('admins')
                    ->whereColumn('location', 'admins.location')
                    ->where('days', $targetDay)
                    ->where('start_time', '>=', $targetStartTime)
                    ->where('end_time', '<=', $targetEndTime);
            })
            ->distinct()
            ->select( 'location')
            ->get();

        $emptyLocations = collect($emptyLocations->toArray())->all();
        //return $emptyLocations;
        return view('viewEmptySlots', compact('emptyLocations'));
    }
}
