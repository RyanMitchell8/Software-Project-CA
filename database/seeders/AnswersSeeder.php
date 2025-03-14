<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AnswersSeeder extends Seeder
{
    public function run()
    {
        $questions = DB::table('questions')->get();
        
        foreach ($questions as $question) {
            $correctAnswer = $question->correct_answer;
            
            // Generate two random incorrect answers (for simplicity, you can refine logic per question type)
           // $incorrectAnswers = $this->generateIncorrectAnswers($correctAnswer);
            
            $answers = [
                ['question_id' => $question->id, 'answer_text' => $correctAnswer, 'created_at' => now(), 'updated_at' => now()],
                ['question_id' => $question->id, 'answer_text' => '3', 'created_at' => now(), 'updated_at' => now()],
                ['question_id' => $question->id, 'answer_text' => 'mars', 'created_at' => now(), 'updated_at' => now()],
            ];
            
            DB::table('answers')->insert($answers);
        }
    }

    private function generateIncorrectAnswers($correctAnswer)
    {
        $predefinedWrongAnswers = [
            'Math' => ['4', '10', '1', '7', '5'],
            'Science' => ['Mars', 'Venus', 'Yellow', 'Red'],
            'English' => ['Warm', 'Big', 'Small', 'Soft'],
            'Geography' => ['New York', 'Los Angeles', 'Ottawa', 'Mexico City'],
        ];

        $wrongAnswers = [];


        
       

        return $wrongAnswers;
}
}