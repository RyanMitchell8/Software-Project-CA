<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'topic',
        'subtopic',
        'number_of_question'
    ];

    public function questions(){
        return $this->belongsTo(Question::class);
    }
}
