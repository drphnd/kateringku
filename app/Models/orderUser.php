<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class orderUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'date',
        'is_payment_status',
    ];

    public static function getAllOrderUser()
    {
        return self::all();
    }


    // penghubung relation database
    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function orderDetails(): HasMany{
        return $this->hasMany(orderDetail::class, 'order_user_id');
    }
}
