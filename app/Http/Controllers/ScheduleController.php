<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }


    public function index()
    {
        $schedules = schedule::all();
        
        return view('schedules.index', [
            'schedules' => $schedules
        ]);
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'description' => 'required',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required',
            'time'    =>  'required',
            'state'   => 'required',
            'venue'   => 'required',
            'city'   => 'required'
        ]);


        $request->user()->schedules()->create( [
            'description' => $request->description,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'time'        => $request->time,
            'state'       => $request->state,
            'venue'       => $request->venue,
            'city'        => $request->city,
            
        ]);

        return back();
    }

    public function edit(Schedule $schedule)
    {
        return view('schedules.edit', compact('schedule'));
    }

    public function update(Schedule $schedule)
    {

        
        $Data = request()->validate([
                    'description' => 'required',
                    'start_date' => 'required|before:end_date',
                    'end_date' => 'required',
                    'time'    =>  'required',
                    'state'   => 'required',
                    'venue'   => 'required',
                    'city'   => 'required'
                ]);

        $schedule->update($Data);

        return redirect('/schedules');

    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return back();
    }

   
    
}
