<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'unit',
        'menu_date_id',
        'delivery_status_id',
        'order_user_id',
    ];

    public static function getAllOrderDetail()
    {
        return self::all();
    }

    // penghubung relation database
    public function menuDates(): BelongsTo{
        return $this->belongsTo(menuDate::class);
    }
    public function deliveryStatuses(): BelongsTo{
        return $this->belongsTo(deliveryStatus::class);
    }
    public function orderUsers(): BelongsTo{
        return $this->belongsTo(orderUser::class);
    }
}
