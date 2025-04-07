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
          
            // History (10 Questions)
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the first President of the United States?', 'correct_answer' => 'George Washington', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp,'subquestion_no' =>0,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'What year did the Titanic sink?', 'correct_answer' => '1912', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp,'subquestion_no' =>1,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'In which year did the Berlin Wall fall?', 'correct_answer' => '1989', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp,'subquestion_no' =>2,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the leader of the Soviet Union during the Cuban Missile Crisis?', 'correct_answer' => 'Nikita Khrushchev', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp,'subquestion_no' =>3,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'When did the United States declare its independence?', 'correct_answer' => '1776', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>4,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'What year did the French Revolution begin?', 'correct_answer' => '1789', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp,'subquestion_no' =>5,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the first man to walk on the moon?', 'correct_answer' => 'Neil Armstrong', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>6,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Which event marked the start of World War I?', 'correct_answer' => 'Assassination of Archduke Franz Ferdinand (1914)', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>7,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'What year did the American Civil War end?', 'correct_answer' => '1865', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>8,],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the first female Prime Minister of the United Kingdom?', 'correct_answer' => 'Margaret Thatcher', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>9,],

           
        ]);
    }
}
