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
         $bookings = Booking::orderBy('created_at','desc')->take(3)->get();
         $manicurebookings = Booking::ismanicure();
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
         return 'thank you for your booking';
        }


}
