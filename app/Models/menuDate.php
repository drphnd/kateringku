<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'menu_id',
    ];

    public static function getAllMenuDate()
    {
        return self::all();
    }
}
