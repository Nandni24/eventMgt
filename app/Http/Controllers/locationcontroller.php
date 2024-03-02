<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\locationmodel;

class locationcontroller extends Controller
{
    public function storelocation(Request $request)
    {
        $value=$request->validate([
            'l_name'=>'required',
           
        ]);

        $loc=new locationmodel();
        $loc->lname=$request->l_name;
        // dd($loc);
        $loc->save();
    }
}
