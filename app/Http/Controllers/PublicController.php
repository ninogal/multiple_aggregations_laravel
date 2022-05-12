<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $activities = Activity::all();
        return view('welcome', compact('activities'));
    }
    
    public function project(){
        $activities = Activity::select('project_id', Activity::raw('sum(hours) as hours'))->groupBy('project_id')->get(); 
        return view('project', compact('activities'));
    }
    
    public function employee(){
        $activities = Activity::select('employee_id', Activity::raw('sum(hours) as hours'))->groupBy('employee_id')->get(); 
        return view('employee', compact('activities'));
    }

    public function date(){
        $activities = Activity::select('date', Activity::raw('sum(hours) as hours'))->groupBy('date')->get(); 
        return view('date', compact('activities'));
    }

    public function multiple(Request $request){
        $param1 = $request->input('param1');
        $param2 = $request->input('param2');
        $activities = Activity::select($param1, $param2, Activity::raw('sum(hours) as hours'))->groupBy($param1, $param2)->orderBy($param1)->get();
        return view('multiple', compact('activities', 'param1', 'param2'));
    }
}
