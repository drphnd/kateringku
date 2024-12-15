<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'totalPrice',
        'DATE',
        'isPaymentStatus',
    ];

    public static function getAllOrderUser()
    {
        return self::all();
    }
}
