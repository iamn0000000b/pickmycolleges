<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'author',
        'status',
    ];

    protected $appends = [
        'image_url',
        'image_thumb_url',
        'excerpt',
    ];

    public function getImageUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/articles") ."/". $this->image : "";
    }

    public function getImageThumbUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/articles/thumbnail") ."/". $this->image : "";
    }

    public function getExcerptAttribute()
    {
        return substr(strip_tags($this->description), 0, 156) . '...';
    }
}
