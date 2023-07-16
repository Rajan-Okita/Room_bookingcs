<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class SlotsController extends Controller
{
    public function empty_locations(Request $request)
    {
        $targetDay = $request->input('target_day');
        $targetStartTime = $request->input('start_time');
        $targetEndTime = $request->input('end_time');

        $emptyLocations =Admin::query()
            ->where('days', '=', $targetDay)
            ->whereNotExists(function  ($query) use ($targetStartTime, $targetEndTime) {
                $query->select(DB::raw(1))
                    ->from('admins AS a')
                    ->whereRaw('a.location = admins.location')
                    ->where('a.days', '=', '$targetDay')
                    ->where(function ($subQuery) use ($targetStartTime, $targetEndTime) {
                        $subQuery->where(function ($q) use ($targetStartTime) {
                            $q->where('a.start_time', '<=', $targetStartTime)
                                ->where('a.end_time', '>', $targetStartTime);
                        })
                            ->orWhere(function ($q) use ($targetEndTime) {
                                $q->where('a.start_time', '<', $targetEndTime)
                                    ->where('a.end_time', '>=', $targetEndTime);
                            })
                            ->orWhere(function ($q) use ($targetStartTime, $targetEndTime) {
                                $q->where('a.start_time', '>=', $targetStartTime)
                                    ->where('a.end_time', '<=', $targetEndTime);
                            });
                    });
            })
            ->distinct()
            ->pluck('location');

        //return $emptyLocations;
        return view('viewEmptySlots', compact('emptyLocations'));
    }
}
