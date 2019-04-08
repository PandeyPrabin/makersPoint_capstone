<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use App\Makeworkorder_model;

class Makeworkorder_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Makeworkorders=Makeworkorder_model::orderBy('workid','title');
//        echo'<pre>';print_r($Makeworkorders);die;
                 
        return view('workorders',['Makeworkorders'=>$Makeworkorders]);
        
        
          return view('earlywarnings',['Makeworkorders'=>$Makeworkorders]);
        
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
            'workid' => 'required',
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
        
        $user=new Makeworkorder_model();
        $user->workid=Input::get("workid");
        $user->title=Input::get("title");
        $user->provider=Input::get("provider");
        $user->customer=Input::get("customer");
        $user->orderdate=Input::get("orderdate");
        $user->deadline=Input::get("deadline");
        $user->absolutedeadline=Input::get("absolutedeadline");
        $user->additionalinfo=Input::get("additionalinfo");
        $user->material=Input::get("material");
        $user->deliveryby=Input::get("deliveryby");
    $user->save();
        
        
        return redirect('workorders')->with('success','Task added successfully!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function workOrders()
    {
        $user=MakeWorkOrder_model::all();
        return view("workorders",compact('user'));
        
    }
    
    public function earlyWarnings()
    {
        $user=MakeWorkOrder_model::all();
        return view("earlywarnings",compact('user'));
        
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Makeworkorder_model::find($id);
        return view('editdetails')->with('Makeworkorder_model', $user);
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
        $request->validate([
            'workid' => 'required',
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
        
        $user=Makeworkorder_model::find($id);
        $user->workid=Input::get("workid");
        $user->title=Input::get("title");
        $user->provider=Input::get("provider");
        $user->customer=Input::get("customer");
        $user->orderdate=Input::get("orderdate");
        $user->deadline=Input::get("deadline");
        $user->absolutedeadline=Input::get("absolutedeadline");
        $user->additionalinfo=Input::get("additionalinfo");
        $user->material=Input::get("material");
        $user->deliveryby=Input::get("deliveryby");
    $user->save();
        
        
        return redirect('workorders')->with('success','Task updated successfully!');
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
