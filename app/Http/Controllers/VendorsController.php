<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use Illuminate\Http\Request;

class VendorsController extends Controller
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

    public function storevendor(Request $request)
    {
        // dd("hello");
        $value=$request->validate([
            'vcname'=>'required',
            'vpass'=>'required',
            'vemail'=>'required'
        ]);

        // dd($value);
        $ven=new Vendors();
        $ven->vcname=$request->vcname;
        $ven->vpass=$request->vpass;
        $ven->vemail=$request->vemail;
        $ven->save();

        return redirect('vendorregiform');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendors $vendors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendors $vendors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendors $vendors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendors $vendors)
    {
        //
    }

    
}
