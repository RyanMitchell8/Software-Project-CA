<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        Question::insert([
            ['topic' => 'Math', 'subtopic' => 'Basic Addition', 'question_text' => 'What is 1 + 1?', 'correct_answer' => '2', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Basic Subtraction', 'question_text' => 'What is 5 - 2?', 'correct_answer' => '3', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Basic Facts', 'question_text' => 'What planet do we live on?', 'correct_answer' => 'Earth', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Basic Facts', 'question_text' => 'What is the color of the sky?', 'correct_answer' => 'Blue', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Basic Vocabulary', 'question_text' => 'What is the opposite of "hot"?', 'correct_answer' => 'Cold', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Basic Vocabulary', 'question_text' => 'What is the opposite of "up"?', 'correct_answer' => 'Down', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of the USA?', 'correct_answer' => 'Washington, D.C.', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country has the flag with a red maple leaf?', 'correct_answer' => 'Canada', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Basic Multiplication', 'question_text' => 'What is 2 x 3?', 'correct_answer' => '6', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Basic Division', 'question_text' => 'What is 10 ÷ 2?', 'correct_answer' => '5', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ]);
    }
}
