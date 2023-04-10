<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'cat_id', 'id');
    }

    // public function related_blogs()
    // {
    //     return $this->hasMany($this, 'cat_id', 'cat_id')
    //         ->inRandomOrder()->limit(3);
    // }

    public function blog_reviews()
    {
        return $this->hasMany(BlogReview::class, 'blog_id', 'id')
            ->latest();
    }
}
