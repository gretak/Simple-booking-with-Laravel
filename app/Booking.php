<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{//custom functions to pass to the view
    public static function ismanicure()
    {
      return static::where('treatment','manicure')->get();
    }

    public static function ispedicure()
    {
      return static::where('treatment','pedicure')->get();
    }

    public static function ishaircut()
    {
      return static::where('treatment','haircut')->get();
    }
}
