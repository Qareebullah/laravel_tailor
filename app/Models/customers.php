<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customers extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['firstName', 'lastName', 'mobile', 'added_by'];
}
