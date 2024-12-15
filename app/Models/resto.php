<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class resto extends Model
{
    use HasFactory;
    protected $fillable = [
        'restoName',
        'address',
        'number',
    ];

    public static function getAllResto()
    {
        return self::all();
    }
}
