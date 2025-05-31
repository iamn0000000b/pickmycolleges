<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'meta_description',
        'meta_keywords',
        'status',
    ];

    protected $appends = [
        'image_url',
        'image_thumb_url',
    ];

    public function getImageUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/pages") ."/". $this->image : "";
    }

    public function getImageThumbUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/pages/thumbnail") ."/". $this->image : "";
    }
}
