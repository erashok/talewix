<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paidads extends Model
{
    use HasFactory;
     protected $table = 'paidads';

    protected $fillable =[
        'paidads'
    ];
}
