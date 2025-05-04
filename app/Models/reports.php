<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reports extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['type', 'total_orders', 'total_customers', 'total_staff', 'total_stock', 'total_incomes', 'total_expense'];
}
