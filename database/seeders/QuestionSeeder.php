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
            // Math (10 Questions)
            ['topic' => 'Math', 'subtopic' => 'Basic Addition', 'question_text' => 'What is 7 + 3?', 'correct_answer' => '10', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Basic Subtraction', 'question_text' => 'What is 15 - 8?', 'correct_answer' => '7', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Multiplication', 'question_text' => 'What is 6 × 4?', 'correct_answer' => '24', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Division', 'question_text' => 'What is 20 ÷ 5?', 'correct_answer' => '4', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Algebra', 'question_text' => 'Solve for x: x + 6 = 12', 'correct_answer' => '6', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Geometry', 'question_text' => 'How many sides does a hexagon have?', 'correct_answer' => '6', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Fractions', 'question_text' => 'What is 1/2 + 1/2?', 'correct_answer' => '1', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Algebra', 'question_text' => 'Solve for x: 2x = 10', 'correct_answer' => '5', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Geometry', 'question_text' => 'What is the name of a 3D shape with six equal squares?', 'correct_answer' => 'Cube', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Math', 'subtopic' => 'Decimals', 'question_text' => 'What is 0.75 as a fraction?', 'correct_answer' => '3/4', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],

            // Science (10 Questions)
            ['topic' => 'Science', 'subtopic' => 'Physics', 'question_text' => 'What force keeps us on the ground?', 'correct_answer' => 'Gravity', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Chemistry', 'question_text' => 'What is the chemical symbol for Oxygen?', 'correct_answer' => 'O', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Biology', 'question_text' => 'What is the powerhouse of the cell?', 'correct_answer' => 'Mitochondria', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Astronomy', 'question_text' => 'Which planet is known as the Red Planet?', 'correct_answer' => 'Mars', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Physics', 'question_text' => 'What is the speed of light?', 'correct_answer' => '299,792,458 m/s', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Chemistry', 'question_text' => 'What is H2O commonly known as?', 'correct_answer' => 'Water', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Physics', 'question_text' => 'What is the unit of electric current?', 'correct_answer' => 'Ampere', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Biology', 'question_text' => 'What do plants need for photosynthesis?', 'correct_answer' => 'Sunlight', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Astronomy', 'question_text' => 'What galaxy is Earth in?', 'correct_answer' => 'Milky Way', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Science', 'subtopic' => 'Physics', 'question_text' => 'What state of matter is lightning?', 'correct_answer' => 'Plasma', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],

            // English (10 Questions)
            ['topic' => 'English', 'subtopic' => 'Grammar', 'question_text' => 'What is the plural of "child"?', 'correct_answer' => 'Children', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Vocabulary', 'question_text' => 'What is a synonym for "happy"?', 'correct_answer' => 'Joyful', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Spelling', 'question_text' => 'Which is the correct spelling: Recieve or Receive?', 'correct_answer' => 'Receive', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Punctuation', 'question_text' => 'What punctuation mark ends a question?', 'correct_answer' => 'Question mark', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Parts of Speech', 'question_text' => 'What type of word is "quickly"?', 'correct_answer' => 'Adverb', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Literature', 'question_text' => 'Who wrote "Romeo and Juliet"?', 'correct_answer' => 'William Shakespeare', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Tenses', 'question_text' => 'What is the past tense of "run"?', 'correct_answer' => 'Ran', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Figures of Speech', 'question_text' => 'What type of figurative language is "She was as fast as a cheetah"?', 'correct_answer' => 'Simile', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Comprehension', 'question_text' => 'What is the main idea of a passage called?', 'correct_answer' => 'Main idea', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'English', 'subtopic' => 'Synonyms', 'question_text' => 'What is a synonym for "big"?', 'correct_answer' => 'Large', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],

            // Geography (10 Questions)
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Canada?', 'correct_answer' => 'Ottawa', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Japan?', 'correct_answer' => 'Tokyo', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country has the longest coastline in the world?', 'correct_answer' => 'Canada', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country is known as the "Land of the Rising Sun"?', 'correct_answer' => 'Japan', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of France?', 'correct_answer' => 'Paris', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country is the smallest in the world by land area?', 'correct_answer' => 'Vatican City', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Australia?', 'correct_answer' => 'Canberra', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country has the largest population in the world?', 'correct_answer' => 'China', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country is home to the Great Barrier Reef?', 'correct_answer' => 'Australia', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Brazil?', 'correct_answer' => 'Brasília', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],

            // History (10 Questions)
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the first President of the United States?', 'correct_answer' => 'George Washington', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'What year did the Titanic sink?', 'correct_answer' => '1912', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'In which year did the Berlin Wall fall?', 'correct_answer' => '1989', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the leader of the Soviet Union during the Cuban Missile Crisis?', 'correct_answer' => 'Nikita Khrushchev', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'When did the United States declare its independence?', 'correct_answer' => '1776', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'What year did the French Revolution begin?', 'correct_answer' => '1789', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the first man to walk on the moon?', 'correct_answer' => 'Neil Armstrong', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Which event marked the start of World War I?', 'correct_answer' => 'Assassination of Archduke Franz Ferdinand (1914)', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'What year did the American Civil War end?', 'correct_answer' => '1865', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Famous Events', 'question_text' => 'Who was the first female Prime Minister of the United Kingdom?', 'correct_answer' => 'Margaret Thatcher', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],

            // Technology (10 Questions)
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'Which civilization built the pyramids?', 'correct_answer' => 'Egyptians', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'Which ancient civilization developed the first written language?', 'correct_answer' => 'Sumerians', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'What ancient civilization is known for its gladiators?', 'correct_answer' => 'Romans', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'Who was the king of the ancient Macedonian Empire?', 'correct_answer' => 'Alexander the Great', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'Which civilization built Machu Picchu?', 'correct_answer' => 'Incas', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'In which civilization was the wheel first used?', 'correct_answer' => 'Mesopotamians', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'Which ancient civilization is credited with inventing the concept of democracy?', 'correct_answer' => 'Ancient Greeks', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'What was the primary language spoken in Ancient Rome?', 'correct_answer' => 'Latin', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'Which civilization is known for its pyramids in Central America?', 'correct_answer' => 'Mayans', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['topic' => 'History', 'subtopic' => 'Ancient Civilizations', 'question_text' => 'What was the capital city of the ancient Egyptian civilization?', 'correct_answer' => 'Thebes', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ]);
    }
}
