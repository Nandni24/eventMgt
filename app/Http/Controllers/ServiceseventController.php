<?php

namespace App\Http\Controllers;

use App\Models\servicesevent;
use App\Models\Vendors;
use Illuminate\Http\Request;

class ServiceseventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ven = Vendors::all(); // Retrieve all items from the database
        // dd($ven);
        return view('servicesform', compact('ven'));
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
        //
    }

    public function addservice(Request $request)
    {
        // dd("hello");
        $value=$request->validate([
            'sname'=>'required',
            'sdescription'=>'required',
            'sprice'=>'required',
            'vid'=>'required'
           
        ]);
        // dd($value);

        $ser=new servicesevent();
        $ser->sname=$request->sname;
        $ser->vid = $request->vid ;
        $ser->sdescription=$request->sdescription;
        $ser->sprice=$request->sprice;
        // dd($ser);
        $ser->save();
        return redirect("displaydata");
        // dd($ser);
    }

    /**
     * Display the specified resource.
     */
    public function show(servicesevent $servicesevent)
    {
        $displaydata = servicesevent::with('vender')->get();
        // dd($displaydata);
        return view('servicedisplay',compact('displaydata'));
    }
    public function editservice($id)
    {
        // $ser=servicesevent::get('id',$id);
        // servicesevent::where('id',$id )->update(['status' => 'accepted']);
        $ser=servicesevent::find($id);
        return view('editservice',compact('ser'));
        // return redirect()->back();
    }

    


    public function deleteevent($id)
    {
        $ser=servicesevent::find($id)->delete();
        return redirect()->back();
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicesevent $servicesevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servicesevent $servicesevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servicesevent $servicesevent)
    {
        //
    }
}
