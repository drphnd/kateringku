<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menuName',
        'description',
        'price',
        'image',
        'resto_id'
    ];

    public static function getAllMenu()
    {
        return self::all();
    }

    // penghubung relation database
    public function restos(): BelongsTo{
        return $this->belongsTo(resto::class);
    }
    public function menuDates(): HasMany{
        return $this->hasMany(menuDate::class, 'menu_id');
    }
}
