<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'trade_date',
        'lot_size',
        'commission',
        'entry_price',
        'target_price',
        'actual_price',
        'capital',
        'direction',
        'opening_time',
        'closing_time',
        'is_normal_trade',
        'target_roi',
        'actual_roi',
        'profit',
        'new_balance',
        'pair',
        'comments',
        'user_id'
    ];
}
