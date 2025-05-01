<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orders extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_id', 'tailor_id', 'added_by', 'order_status','payment','due', 'total','payment_status'
    ];
}
