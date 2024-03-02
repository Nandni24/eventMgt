<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $value=$request->validate([
            'cname'=>'required',
            'cpass'=>'required',
            'cemail'=>'required'
        ]);

        $cust=new customers();
        $cust->cname=$request->cname;
        $cust->cpass=$request->cpass;
        $cust->cemail=$request->cemail;
        $cust->save();

        return redirect('bookingform');

    }

    

  

    /**
     * Display the specified resource.
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customers $customers)
    {
        //
    }
}
