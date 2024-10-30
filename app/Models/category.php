<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable=[
        'name',
        'slug',
        'description',
        'cat_image',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'navbar_status',
        'navbar_footer',
        'navbar_sidebar',
        'status',
        'created_by'

    ];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
