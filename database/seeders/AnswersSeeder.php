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
           
            // History (10 Questions)
            'History' => [
                ['Thomas Jefferson', 'Abraham Lincoln', 'Andrew Jackson'],
                ['1939', '1913', '1920'],
                ['1955', '1965', '1975'],
                ['Marco Polo', 'Vasco da Gama', 'Leif Erikson'],
                ['1910', '1902', '1920'],
                ['1850', '1870', '1890'],
                ['Buzz Aldrin', 'Yuri Gagarin', 'Alan Shepard'],
                ['Pearl Harbor attack', 'Assassination of Archduke Ferdinand', 'D-Day invasion'],
                ['1901', '1854', '1833'],
                ['King George III', 'King Henry VIII', 'Queen Elizabeth I'],
            ],

            // Math (10 Questions)
            'Math' => [
                ['5', '12', '20', '2',],
                ['10', '5', '12', '4',],
                ['18', '36', '16', '20',],
                ['3', '7', '10', '8',],
                ['10', '5', '7', '2',],
                ['4', '8', '10', '12',],
                ['2', '3/2', '4/3', '1/4',],
                ['3', '8', '2', '4',],
                ['Sphere', 'Rectangle', 'Cylinder', 'Pyramid',],
                ['1/2', '3/5', '1/4', '1/3',],
            ],

            // Science (10 Questions)
            'Science' => [
                ['Friction', 'Magnetism', 'Wind', 'Inertia'],
                ['Ox', 'H', 'O3'],
                ['Cytoplasm', 'Ribosome', 'Lysosome'],
                ['Venus', 'Jupiter', 'Earth', 'Saturn'],
                ['150,000 m/s', '400,000 m/s', '200,000 m/s'],
                ['Hydrochloric acid', 'Ammonia'],
                ['Joule', 'Ohm', 'Watt'],
                ['Soil', 'Water', 'Chlorophyll'],
                ['Andromeda', 'Whirlpool', 'Pinwheel'],
                ['Solid', 'Liquid', 'Energy'],
            ],

            // English (10 Questions)
            'English' => [
                ['Childs', 'Childrens', 'Childeren'],
                ['Sad', 'Angry', 'Sorrowful'],
                ['Recieve', 'Reieve'],
                ['Exclamation mark', 'Full stop', 'Comma'],
                ['Verb', 'Noun', 'Adjective'],
                ['Charles Dickens', 'Jane Austen', 'Mark Twain'],
                ['Runed', 'Runned', 'Running'],
                ['Metaphor', 'Hyperbole', 'Personification'],
                ['Summary', 'Theme'],
                ['Small', 'Tiny', 'Little'],
            ],

            // Geography (10 Questions)
            'Geography' => [
                ['Vancouver', 'Toronto', 'Montreal'],
                ['Kyoto', 'Osaka', 'Hokkaido'],
                ['USA', 'Australia', 'Russia'],
                ['China', 'Korea', 'Vietnam'],
                ['London', 'Rome', 'Madrid'],
                ['Monaco', 'Nauru', 'San Marino'],
                ['Sydney', 'Melbourne', 'Brisbane'],
                ['India', 'USA', 'Russia'],
                ['Fiji', 'New Zealand', 'Indonesia'],
                ['Sao Paulo', 'Rio de Janeiro', 'Salvador'],
            ],

            'Business' => [
                ['Steve Jobs', 'Mark Zuckerberg', 'Elon Musk'],
                ['Adidas', 'Reebok', 'Under Armour'], 
                ['eBay', 'Alibaba', 'Walmart'], 
                ['Cross-selling', 'Bundling', 'Discounting'], 
                ['To increase ad revenue', 'To get more clicks', 'To reduce bounce rate'],
                ['IBM', 'Microsoft', 'Dell'], 
                ['Initial Price Offering', 'Initial Private Offering', 'Internet Public Option'], 
                ['Citibank', 'Wells Fargo', 'Chase Bank'], 
                ['Taylorism', 'Scientific Management', 'Contingency Theory'], 
                ['Henry Ford', 'Elon Musk', 'Jack Welch'], 
            ],

            'Computer Science' => [
                    ['Hyper Transfer Text Protocol', 'Hyperlink Transfer Protocol', 'HyperText Text Protocol'],
                    ['To store data', 'To play sound', 'To control the power supply'],
                    ['Java', 'C++', 'Python'],
                    ['Random Access Memory', 'Rapid Access Memory', 'Read Access Memory'],
                    ['Uniform Resource Locator', 'Universal Resource Locator', 'Uniform Reconnect Locator'],
                    ['Hard Drive', 'Motherboard', 'Power Supply'],
                    ['General User Interface', 'Graphic User Integration', 'Great User Interface'],
                    ['Mouse', 'Keyboard', 'Scanner'],
                    ['Photoshop', 'Windows', 'Linux'],
                    ['Internet Protocol', 'Intelligent Processor', 'Internet Port']
                ],
            
                'Art' => [
                    ['Pablo Picasso', 'Vincent van Gogh', 'Claude Monet'],
                    ['Acrylic', 'Oil paint', 'Charcoal'],
                    ['Horizon Line', 'Perspective', 'Shade'],
                    ['Salvador Dalí', 'Georges Seurat', 'Jackson Pollock'],
                    ['Canvas', 'Wood', 'Glass'],
                    ['Cubism', 'Impressionism', 'Abstract Expressionism'],
                    ['Pottery', 'Glassblowing', 'Metalworking'],
                    ['Contrast', 'Composition', 'Texture'],
                    ['Claude Monet', 'Leonardo da Vinci', 'Pablo Picasso'],
                    ['Watercolor', 'Fresco', 'Pastel']
                ],
            
                'Music' => [
                    ['Elvis Presley', 'Prince', 'Justin Bieber'],
                    ['Pitch', 'Rhythm', 'Tone'],
                    ['Clarinet', 'Flute', 'Oboe'],
                    ['Ludwig van Beethoven', 'Johann Sebastian Bach', 'Wolfgang Amadeus Mozart'],
                    ['Classical', 'Baroque', 'Jazz'],
                    ['Guitar', 'Drums', 'Violin'],
                    ['Chorus', 'Solo', 'Duet'],
                    ['Dotted note', 'Sharp', 'Flat'],
                    ['Opera', 'Orchestra', 'Concerto'],
                    ['Ludwig van Beethoven', 'Frédéric Chopin', 'Johannes Brahms']
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
