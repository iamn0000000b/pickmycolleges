<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_id',
        'title',
        'slug',
        'description',
        'image',
        'exam_date',
        'application_last_date',
        'exam_info',
        'exam_dates',
        'exam_highlight',
        'status',
    ];

    protected $appends = [
        'image_url',
        'image_thumb_url',
        'excerpt',
    ];

    public function getImageUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/events") ."/". $this->image : "";
    }

    public function getImageThumbUrlAttribute()
    {
        return !empty($this->image) ? asset("storage/app/public/events/thumbnail") ."/". $this->image : "";
    }

    public function getExcerptAttribute()
    {
        return substr(strip_tags($this->description), 0, 129) . '...';
    }

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }
}
