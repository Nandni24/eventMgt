<?php

namespace App\Http\Controllers;

use App\Models\bookingEvent;
use Illuminate\Http\Request;

class BookingEventController extends Controller
{
    public function display(){

        $booking=bookingEvent::get();
        // dd($booking);
        return view('bookingdisplay',compact('booking'));
    }

    public function acceptevent($bid)
    {
        $book=bookingEvent::get('bid',$bid);
        // dd($book);
        $book->status="accepted";
        // bookingEvent::where('bid',$bid )->update();
        // $book->where('bid',)->update(['status'=>"Accepted"]);
        // return redirect()->back();
    }

    public function accepted($id)
    {
        $book=bookingEvent::find($bid);
        dd($book);
        // $book->where('bid',$bid)->update(["status"=>"Accepted"]);
        // return redirect()->back();

    }

    public function rejected($bid)
    {
        $book=bookingEvent::find($bid);
        $book->where('bid',$bid)->update(["status"=>"Rejected"]);
        return redirect()->back();

    }

}
