<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable=[
        'category_id',
        'name',
        'slug',
        'short_description',
        'estimated_reading_time',
        'description',
        'tags',
        'yt_frame',
        'thum_image',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'ads_main',
        'ads_sidebar',
        'right_sidebar',
        'status',
        'created_by'
    ];

    public function category(){
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
    public function posts()
        {
            return $this->belongsToMany(Post::class);
        }

        public function getEstimatedReadingTimeAttribute()
    {
        return $this->attributes['estimated_reading_time'] ?? 0; // Default to 0 if null
    }

}
