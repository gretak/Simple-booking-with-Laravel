<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{//custom functions to pass to the view
    public static function ismanicure()
    {
      return static::where('treatment','manicure')
      ->orderBy('date', 'asc')
      ->get();
    }

    public static function ispedicure()
    {
      //return static::where('treatment','pedicure')->get();
      return static::where('treatment','pedicure')
      ->orderBy('date', 'asc')
      ->get();

    }

    public static function ishaircut()
    {
      return static::where('treatment','haircut')
      ->orderBy('date', 'asc')
      ->get();
    }

    public static function islatest()
    {
      return static::orderBy('created_at','desc')->take(1)->get();
    }

    public static function deletelatest()
    {
      return static::orderBy('created_at','desc')->take(1)->delete();
    }
}
