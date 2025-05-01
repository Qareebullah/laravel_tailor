<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class registration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['firstName', 'lastName', 'gender', 'dob', 'skills', 'salary', 'salary_type', 'mobile', 'agreement', 'agreement_file', 'photo', 'added_by'];
}
