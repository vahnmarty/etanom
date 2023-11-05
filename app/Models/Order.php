<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static function generateCode()
    {
        $a = date('Ymd');
        $b = uniqid();
        $c = auth()->id() ?? 'X';

        $identifier = $a . $b . $c;
        return strtoupper($identifier);
    }
}
