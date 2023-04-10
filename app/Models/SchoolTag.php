<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolTag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function schools()
    {
        return $this->hasMany(School::class, 'tag_id', 'id');
    }
}
