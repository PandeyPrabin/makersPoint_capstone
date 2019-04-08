<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workorder;
use Illuminate\Support\Facades\Input;

class workorder_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workorder = Workorder::orderBy('workid','title');
        
        return view('workorders',['workorders'=>$workorder]);
        
        return view('earlywarnings',['workorders'=>$workorder]);
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
        $request->validate([
            'workid' => 'required|unique:workorders',
            'title' => 'required',
            'provider' => '',
            'customer' => '',
            'orderdate' => 'required',
            'deadline' => 'required',
            'absolutedeadline' => '',
            'additionalinfo' => '',
            'material' => '',
            'delivery' => ''
            
            ]);
        
        $workorder=new Workorder();
        $workorder->workid=Input::post("workid");
        $workorder->title=Input::post("title");
        $workorder->provider=Input::post("provider");
        $workorder->customer=Input::post("customer");
        $workorder->orderdate=Input::post("orderdate");
        $workorder->deadline=Input::post("deadline");
        $workorder->absolutedeadline=Input::post("absolutedeadline");
        $workorder->additionalinfo=Input::post("additionalinfo");
        $workorder->material=Input::post("material");
        $workorder->deliveryby=Input::post("deliveryby");
    $workorder->save();
        
        
        return redirect('workorders')->with('success','Task added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function workorders()
    {
        $workorder=Workorder::all();
        return view('workorders',compact('workorder'));
    }

     public function earlywarnings()
    {
        $workorder=Workorder::all();
        return view('earlywarnings',compact('workorder'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
