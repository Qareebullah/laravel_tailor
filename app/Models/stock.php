<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class stock extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'product', 
        'product_type', 
        'amount', 
        'color',
        'sell_price',
        'expense', 
        'purchase_price',
        'medan_country',
        'purchase_by',
        'added_by'
    ];
}
