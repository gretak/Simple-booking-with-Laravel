<?php

use App\Booking;

Route::get('/', function () {
 $bookings = Booking::all();

  return view('welcome', compact('bookings'));
});

Route::get('/company', function () {
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
});

Route::get('/client', function () {
 //$tasks = DB::table('booking')->get();
 $bookings = Booking::all();

 return view('clientview', compact('bookings'));
});