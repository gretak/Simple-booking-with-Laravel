<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;


class BookingController extends Controller
{

        public function index() 
        {
         $bookings = Booking::all();

         return view('welcome', compact('bookings'));
        }

        public function company() 
        {

        //return \DB::table('bookings')
        //->where('treatment','pedicure')
      //->join('treatment','date', '=', 'treatment.date')
      //->orderBy('date', 'ESC')
     // ->get();

         $bookings = Booking::orderBy('created_at','desc')->take(3)->get();
         $manicurebookings = Booking::ismanicure();
      //    $pedicurebookings = DB::where('treatment','pedicure')
      // ->join('treatment','date', '=', 'treatment.date')
      // ->orderBy('treatment.date', 'DSC')
      // ->get();
         $pedicurebookings = Booking::ispedicure();
         $haircutbookings = Booking::ishaircut();

         return view('companyview',
           compact(
            'bookings',
            'manicurebookings',
            'pedicurebookings',
            'haircutbookings'
            )
         );
        }

        public function client ()
        {
         $bookings = Booking::all();

         return view('clientview', compact('bookings'));
        }

        public function show ()
        {
         //dd(request()->all());
         $booking = new Booking;

         $booking->treatment = request('treatment');
         $booking->date = request('date');
         $booking->time = request('time');

         $booking -> save();

         return redirect('/thankyou');
        }

        public function thankyou () 
        {
         $latestbookings = Booking::islatest();

         return view('thankyou', compact('latestbookings'));
        }

         public function deletelatest() 
         {
          $deletelatest = Booking::deletelatest();

          return "<h1>your booking is canceled</h1>";
         }


}
