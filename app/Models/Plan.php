<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table = 'table_plans';
    protected $fillable=[
        'heading_name',
        'price_name',
        'month_years',
        'plan_desc',
        'tag_name',
        'about_heading',
        'about_desc',
        'plan_image',
        'created_by',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'plan_id');
    }
}

