<?php

namespace App\Http\Controllers;

use App\Models\packages;
use Illuminate\Http\Request;

class PackageController extends Controller
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
    public function storepackage(Request $request)
    {
        $value=$request->validate([
            'p_name'=>'required',
            'p_price'=>'required',
            'p_description'=>'required'
        ]);

        $pack=new packages();
        $pack->p_name=$request->p_name;
        $pack->p_price=$request->p_price;
        $pack->p_description=$request->p_description;
        $pack->save();
    }

    public function display()
    {
        $pac=packages::all();
        return view('packagedisplay',compact('pac'));
    }

    public function deletepackage($id){
        // // dd("hello");
        $pac=packages::find($id);
        $pac->delete();
        return redirect()->back();
        // return redirect()->back();
    }

    public function updatepackage($id,Request $request)
    {
        $value=$request->validate([
            'p_name'=>'required',
            'p_price'=>'required',
            'p_description'=>'required'
        ]);

        $pack=new packages();
        $pack->p_name=$request->p_name;
        $pack->p_price=$request->p_price;
        $pack->p_description=$request->p_description;
        $pack->where('id',$id)->update($value);
        return redirect('packagedisplay');
    }

    public function editpackage($id){
         $pac=packages::find($id);
        return view('editpackage',compact('pac'));
    }

    

}
