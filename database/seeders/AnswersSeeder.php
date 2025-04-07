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
            $incorrectAnswers = $this->generateIncorrectAnswers($question->topic,$question->subquestion_no, $correctAnswer);

            // Combine correct answer with two incorrect answers
 
            
            $answers = collect([$correctAnswer, ...$incorrectAnswers])->shuffle();

            // Insert into database
            foreach ($answers as $answer) {
                DB::table('answers')->insert([
                    'question_id' => $question->id,
                    'answer_text' => $answer,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    private function generateIncorrectAnswers($topic, $subquestion_no, $correctAnswer)
    {
        $predefinedWrongAnswers = [
            // Math (10 Questions)
           
            // History (10 Questions)
            'History' => [
                ['Thomas Jefferson', 'Abraham Lincoln', 'Andrew Jackson'],
                ['1939', '1912', '1920'],
                ['1955', '1965', '1975'],
                ['Marco Polo', 'Vasco da Gama', 'Leif Erikson'],
                ['1910', '1902', '1920'],
                ['1850', '1870', '1890'],
              
                
                ['Buzz Aldrin', 'Yuri Gagarin', 'Alan Shepard'],
                ['Mongol Empire', 'Roman Empire', 'Ottoman Empire'],
                ['Pearl Harbor attack', 'Assassination of Archduke Ferdinand', 'D-Day invasion'],
               [ 'King George III', 'King Henry VIII', 'Queen Elizabeth I'],
                ['Santa Maria', 'Titanic', 'Beagle'],
            ],


        ];

        // Get possible incorrect answers based on the topic
        $availableAnswers = $predefinedWrongAnswers[$topic][$subquestion_no] ?? ['Wrong1', 'Wrong2'];

        // Remove the correct answer from the list (if exists)
        $availableAnswers = array_values(array_diff($availableAnswers, [$correctAnswer]));

        // Select two random incorrect answers
        return array_slice($availableAnswers, 0, 2);
    }
}
