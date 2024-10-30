<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PlanFormRequest;
use Illuminate\Support\Str;

class PlansController extends Controller
{
    public function index(){
        $Plans = Plan::all();
        return view ('admin.plans.index', compact('Plans'));
       }

       public function create(){
        return view('admin.plans.create');
    }
    public function store(PlanFormRequest $request)
    { 
        $data = $request->validated();
        $Plan = new Plan;
        $Plan->heading_name = $data['heading_name'];
        $Plan->price_name = $data['price_name'];
        $Plan->month_years = $data['month_years'];
        $Plan->plan_desc = $data['plan_desc'];
        $Plan->tag_name = $data['tag_name'];
        $Plan->created_by = Auth::user()->id;
        $Plan->save();
        return redirect('/admin/plans')->with('message', 'Plan Added Successfully');
    }
    public function edit($plan_id){
        $plan = Plan::find($plan_id);
        return view('admin.plans.edit', compact('plan'));
    }
}
