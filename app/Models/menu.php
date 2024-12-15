<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menuName',
        'description',
        'price',
        'unit',
        'image',
        'resto_id'
    ];

    public static function getAllMenu()
    {
        return self::all();
    }
}
