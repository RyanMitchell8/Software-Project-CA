<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable =[
        'topic',
        'subtopic',
        'question_text',
        'correct_answer'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
