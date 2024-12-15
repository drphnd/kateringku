<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'unit',
        'menuDate_id',
        'deliveryStat_id',
        'orderUser_id',
    ];

    public static function getAllOrderDetail()
    {
        return self::all();
    }
}
