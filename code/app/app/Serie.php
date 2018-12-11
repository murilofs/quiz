<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public static function getDescription($input)
    {
        return Serie::where('letter', $input)->firstOrFail();
    }
}