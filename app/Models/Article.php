<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'pdf',
        'category_id',
        'published_at'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->title);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating');
    }

}
