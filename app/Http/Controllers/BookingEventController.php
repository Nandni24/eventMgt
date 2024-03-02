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
        bookingEvent::where('bid',$bid )->update(['status' => 'accepted']);
        return redirect()->back();
    }
    public function regectevent($bid)
    {
        $book=bookingEvent::get('bid',$bid);
        bookingEvent::where('bid',$bid )->update(['status' => 'rejected']);
        return redirect()->back();
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
