<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = ["category_id", "title", "subtitle", "text", "cover"];

    public function getSummaryAttribute()
    {
        return Str::substr($this->attributes['text'], 0, 250) . '...';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
