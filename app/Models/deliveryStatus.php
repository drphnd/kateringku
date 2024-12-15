<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deliveryStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'statusName'
    ];

    public static function getAllDeliveryStatus()
    {
        return self::all();
    }
}
