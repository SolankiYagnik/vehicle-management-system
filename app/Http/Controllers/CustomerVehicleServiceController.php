<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerVehicleServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('customer.view.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $service = Service::where('category_id')->get();

        return view('customer.view.vehicle-service', compact('categories', 'service'));
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
           'category_id' => 'required',
           'vehicle_name' => 'required',
           'vehicle_model'=> 'required',
           'vehicle_brand' => 'required',
           'vehicle_reg_no' => 'required',
           'service_date' => 'required',
           'delivery_type'=> 'required',
       ]);
           $service = new Service;
           $service->user_id= Auth::user()->id;
           $service->category_id= $request->input('category_id');
           $service->vehicle_name= $request->input('vehicle_name');
           $service->vehicle_model= $request->input('vehicle_model');
           $service->vehicle_brand= $request->input('vehicle_brand');
           $service->vehicle_reg_no = $request->input('vehicle_reg_no');
           $service->service_date = $request->input('service_date');
           $service->delivery_type = $request->input('delivery_type');
           $service->save();
           return redirect()->route('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
