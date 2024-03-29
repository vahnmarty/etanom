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

    public function isPaid()
    {
        return !empty($this->paid_at);
    }

    public function seedballs()
    {
        return $this->hasMany(Seedball::class);
    }
}
