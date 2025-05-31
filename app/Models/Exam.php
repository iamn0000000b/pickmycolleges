<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_category_id',
        'title',
        'slug',
        'description',
        'status',
    ];

    public function exam_category()
    {
        return $this->belongsTo(ExamCategory::class);
    }
}
