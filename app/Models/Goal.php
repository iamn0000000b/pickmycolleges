<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'status',
    ];

    protected $appends = [
        'image_url',
        'image_thumb_url',
        'excerpt',
    ];

    public function getImageUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/goals") ."/". $this->image : "";
    }

    public function getImageThumbUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/goals/thumbnail") ."/". $this->image : "";
    }

    public function getExcerptAttribute()
    {
        return substr(strip_tags($this->description), 0, 129) . '...';
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
