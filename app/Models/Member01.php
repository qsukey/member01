<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member01 extends Model
{
    use HasFactory;


    protected $table = 'member01';

    protected $fillable = [
        'name',
        'phone',
        'email'
    ];
}
