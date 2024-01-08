<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [];

    public function inventories()
    {
        return $this->hasMany(PlantInventory::class);
    }

    public function scopeAvailable($query, $userId)
    {
        return $query->whereHas('inventories', function($q) use ($userId) {
            $q->where('user_id', '!=', $userId);
        });
    }
}
