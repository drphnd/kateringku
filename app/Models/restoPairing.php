<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restoPairing extends Model
{
    use HasFactory;

    protected $fillable = [
        'resto_id',
        'category_id',
    ];

    public static function getAllRestoPairing()
    {
        return self::all();
    }
}
