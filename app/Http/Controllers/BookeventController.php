<?php

namespace App\Http\Controllers;

use App\Models\bookevent;
use Illuminate\Http\Request;

class BookeventController extends Controller
{
    public function display(){

        $booking=bookevent::get();
        // dd($booking);
        return view('bookingdisplay',compact('booking'));
    }

    public function acceptevent($bid)
    {
        $book=bookevent::get('bid',$bid);
        bookevent::where('bid',$bid )->update(['status' => 'accepted']);
        return redirect()->back();
    }
    public function regectevent($bid)
    {
        $book=bookevent::get('bid',$bid);
        bookevent::where('bid',$bid )->update(['status' => 'rejected']);
        return redirect()->back();
    }



    }
