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
            $incorrectAnswers = $this->generateIncorrectAnswers($question->topic, $correctAnswer);

            // Combine correct answer with two incorrect answers
 
            
            $answers = collect([$correctAnswer, ...$incorrectAnswers])->shuffle();

            // Insert into database
            foreach ($answers as $answer) {
                DB::table('answers')->insert([
                    'question_id' => $question->id,
                    'answer_text' => $answer,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }

    private function generateIncorrectAnswers($topic, $correctAnswer)
    {
        $predefinedWrongAnswers = [
            // Math (10 Questions)
            'Math' => [
                '5', '12', '20', '2',
                '10', '5', '12', '4',
                '18', '36', '16', '20',
                '3', '7', '10', '8',
                '10', '5', '7', '2',
                '4', '8', '10', '12',
                '2', '3/2', '4/3', '1/4',
                '3', '8', '2', '4',
                'Sphere', 'Rectangle', 'Cylinder', 'Pyramid',
                '1/2', '3/5', '1/4', '1/3',
            ],

            // Science (10 Questions)
            'Science' => [
                'Friction', 'Magnetism', 'Wind', 'Inertia',
                'Ox', 'H', 'O3',
                'Cytoplasm', 'Ribosome', 'Lysosome',
                'Venus', 'Jupiter', 'Earth', 'Saturn',
                '150,000 m/s', '400,000 m/s', '200,000 m/s',
                'Hydrochloric acid', 'Ammonia',
                'Joule', 'Ohm', 'Watt',
                'Soil', 'Water', 'Chlorophyll',
                'Andromeda', 'Whirlpool', 'Pinwheel',
                'Solid', 'Liquid', 'Energy',
            ],

            // English (10 Questions)
            'English' => [
                'Childs', 'Childrens', 'Childeren',
                'Sad', 'Angry', 'Sorrowful',
                'Recieve', 'Reieve',
                'Exclamation mark', 'Full stop', 'Comma',
                'Verb', 'Noun', 'Adjective',
                'Charles Dickens', 'Jane Austen', 'Mark Twain',
                'Runed', 'Runned', 'Running',
                'Metaphor', 'Hyperbole', 'Personification',
                'Summary', 'Theme',
                'Small', 'Tiny', 'Little',
            ],

            // Geography (10 Questions)
            'Geography' => [
                'Vancouver', 'Toronto', 'Montreal',
                'Kyoto', 'Osaka', 'Hokkaido',
                'USA', 'Australia', 'Russia',
                'China', 'Korea', 'Vietnam',
                'London', 'Rome', 'Madrid',
                'Monaco', 'Nauru', 'San Marino',
                'Sydney', 'Melbourne', 'Brisbane',
                'India', 'USA', 'Russia',
                'Fiji', 'New Zealand', 'Indonesia',
                'Sao Paulo', 'Rio de Janeiro', 'Salvador',
            ],

            // Technology (10 Questions)
            'Technology' => [
                'Central Process Unit', 'Central Program Unit', 'Central Processor Unit',
                'Manage software only', 'Manage network', 'Manage applications only',
                'Samsung', 'Nokia', 'LG',
                'Universal Resource Locator', 'Uniform Reference Locator', 'Uniform Request Locator',
                'Internet Explorer', 'Safari', 'Opera',
                'Java', 'C#', 'Python',
                'Wireless Function', 'Wide Fidelity', 'Wired Fidelity',
                'Apple', 'Google', 'IBM',
                'Store data permanently', 'Execute programs', 'Control devices',
                'High Text Markup Language', 'Hyper Terminal Markup Language', 'Hyper Tool Markup Language',
            ],

            // History (10 Questions)
            'History' => [
                ['Thomas Jefferson', 'Abraham Lincoln', 'Andrew Jackson'],
                ['1939', '1912', '1920'],
                ['Marco Polo', 'Vasco da Gama', 'Leif Erikson'],
                ['Mongol Empire', 'Roman Empire', 'Ottoman Empire'],
                ['1910', '1902', '1920'],
                ['Buzz Aldrin', 'Yuri Gagarin', 'Alan Shepard'],
                ['1850', '1870', '1890'],
                ['Pearl Harbor attack', 'Assassination of Archduke Ferdinand', 'D-Day invasion'],
               [ 'King George III', 'King Henry VIII', 'Queen Elizabeth I'],
                ['Santa Maria', 'Titanic', 'Beagle'],
            ],

            'Business' => [
                'Steve Jobs', 'Adidas', 'eBay',
                'Cross-selling', 'To increase website traffic without improving ranking',
                'Microsoft', 'International Private Offering', 'Chase Bank',
                'Freud\'s Theory of Personality', 'Henry Ford',
            ],

        ];

        // Get possible incorrect answers based on the topic
        $availableAnswers = $predefinedWrongAnswers[$topic] ?? ['Wrong1', 'Wrong2'];

        // Remove the correct answer from the list (if exists)
        $availableAnswers = array_values(array_diff($availableAnswers, [$correctAnswer]));

        // Select two random incorrect answers
        return array_slice($availableAnswers, 0, 2);
    }
}
