<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class expense extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['purpose', 'amount', 'expense_by', 'inserted_by', 'payment_method', 'reference', 'status'];
}
