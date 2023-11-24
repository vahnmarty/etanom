<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Seedball extends Model
{
    use HasFactory;

    protected $appends = ['short_code'];

    public static function price()
    {
        return config('settings.seedball.price');
    }

    public static function displayPrice()
    {
        return config('settings.seedball.symbol') . number_format( config('settings.seedball.price'), 2);
    }

    public static function generateCode()
    {
        $a = date('Ymd');
        $b = uniqid();
        $c = auth()->id() ?? 'X';

        $identifier = $a .'-'. $b .'-' . $c;
        return strtoupper($identifier);
    }

    public function getShortCodeAttribute()
    {
        $code = explode('-', $this->code);

        return $code[1];
    }

}
