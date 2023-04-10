<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tag()
    {
        return $this->belongsTo(SchoolTag::class, 'tag_id', 'id');
    }

    public function related_schools()
    {
        return $this->hasMany($this, 'tag_id', 'tag_id')
            ->inRandomOrder()->limit(3);
    }

    public function school_reviews()
    {
        return $this->hasMany(SchoolReview::class, 'school_id', 'id')
            ->latest();
    }
}
