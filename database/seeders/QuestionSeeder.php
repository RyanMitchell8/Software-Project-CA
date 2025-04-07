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

                       // Math (10 Questions)
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is 7 + 3?', 'correct_answer' => '10', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>0,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is 15 - 8?', 'correct_answer' => '7', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>1,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is 6 × 4?', 'correct_answer' => '24', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>2,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is 20 ÷ 5?', 'correct_answer' => '4', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>3,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'Solve for x: x + 6 = 12', 'correct_answer' => '6', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>4,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'How many sides does a hexagon have?', 'correct_answer' => '6', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>5,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is 1/2 + 1/2?', 'correct_answer' => '1', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>6,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'Solve for x: 2x = 10', 'correct_answer' => '5', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>7,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is the name of a 3D shape with six equal squares?', 'correct_answer' => 'Cube', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>8,],
                       ['topic' => 'Math', 'subtopic' => 'Basic Maths', 'question_text' => 'What is 0.75 as a fraction?', 'correct_answer' => '3/4', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' =>9,],

            // Science (10 Questions)
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What force keeps us on the ground?', 'correct_answer' => 'Gravity', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What is the chemical symbol for Oxygen?', 'correct_answer' => 'O', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What is the powerhouse of the cell?', 'correct_answer' => 'Mitochondria', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'Which planet is known as the Red Planet?', 'correct_answer' => 'Mars', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What is the speed of light?', 'correct_answer' => '299,792,458 m/s', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What is H2O commonly known as?', 'correct_answer' => 'Water', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What is the unit of electric current?', 'correct_answer' => 'Ampere', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What do plants need for photosynthesis?', 'correct_answer' => 'Sunlight', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What galaxy is Earth in?', 'correct_answer' => 'Milky Way', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'Science', 'subtopic' => 'Basic Science', 'question_text' => 'What state of matter is lightning?', 'correct_answer' => 'Plasma', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9],

            // English (10 Questions)
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What is the plural of "child"?', 'correct_answer' => 'Children', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What is a synonym for "happy"?', 'correct_answer' => 'Joyful', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'Which is the correct spelling: Recieve or Receive?', 'correct_answer' => 'Receive', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What punctuation mark ends a question?', 'correct_answer' => 'Question mark', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What type of word is "quickly"?', 'correct_answer' => 'Adverb', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'Who wrote "Romeo and Juliet"?', 'correct_answer' => 'William Shakespeare', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What is the past tense of "run"?', 'correct_answer' => 'Ran', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What type of figurative language is "She was as fast as a cheetah"?', 'correct_answer' => 'Simile', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What is the main idea of a passage called?', 'correct_answer' => 'Main idea', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'English', 'subtopic' => 'Basic English', 'question_text' => 'What is a synonym for "big"?', 'correct_answer' => 'Large', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9],

            // Geography (10 Questions)
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Canada?', 'correct_answer' => 'Ottawa', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Japan?', 'correct_answer' => 'Tokyo', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country has the longest coastline in the world?', 'correct_answer' => 'Canada', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country is known as the "Land of the Rising Sun"?', 'correct_answer' => 'Japan', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of France?', 'correct_answer' => 'Paris', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country is the smallest in the world by land area?', 'correct_answer' => 'Vatican City', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Australia?', 'correct_answer' => 'Canberra', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country has the largest population in the world?', 'correct_answer' => 'China', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'Which country is home to the Great Barrier Reef?', 'correct_answer' => 'Australia', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'Geography', 'subtopic' => 'Countries', 'question_text' => 'What is the capital of Brazil?', 'correct_answer' => 'Brasília', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9],

            // Business (10 Questions)
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Who is known as the founder of Microsoft?', 'correct_answer' => 'Bill Gates', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Which company is known for its "Just Do It" slogan?', 'correct_answer' => 'Nike', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Which online retailer was founded by Jeff Bezos in 1994?', 'correct_answer' => 'Amazon', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'What is the term for the strategy of selling more expensive versions of a product to customers who are willing to pay more?', 'correct_answer' => 'Upselling', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'What is the main goal of SEO (Search Engine Optimization)?', 'correct_answer' => 'To improve a website\'s ranking in search engine results', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Which company is known for its "Think Different" marketing campaign?', 'correct_answer' => 'Apple', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'What does "IPO" stand for in the context of business and finance?', 'correct_answer' => 'Initial Public Offering', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Which financial institution is known for the creation of the first credit card?', 'correct_answer' => 'Bank of America', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Which management theory is known for emphasizing the importance of employee motivation and needs?', 'correct_answer' => 'Maslow\'s Hierarchy of Needs', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'Business', 'subtopic' => 'Business Fundamentals', 'question_text' => 'Who is known as the father of modern management?', 'correct_answer' => 'Peter Drucker', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9],

            // Computer Science (10 Questions)
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'What does "HTTP" stand for in web addresses?', 'correct_answer' => 'HyperText Transfer Protocol', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'What is the main function of the CPU in a computer?', 'correct_answer' => 'To execute instructions and process data', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'Which programming language is primarily used for iOS app development?', 'correct_answer' => 'Swift', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'What does the term "cloud computing" refer to?', 'correct_answer' => 'Storing and accessing data and programs over the internet', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'Which programming language is used for web development and is widely used for creating server-side applications?', 'correct_answer' => 'PHP', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'Which data structure is used to store elements in a last-in, first-out (LIFO) order?', 'correct_answer' => 'Stack', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'Which algorithm is typically used to find the shortest path in a graph?', 'correct_answer' => 'Dijkstra’s Algorithm', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'What type of data structure is a binary tree?', 'correct_answer' => 'Tree', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'Which markup language is used for creating the structure of web pages?', 'correct_answer' => 'HTML', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'Computer Science', 'subtopic' => 'Computer Basics', 'question_text' => 'What is the name of the algorithm used to sort an array by repeatedly finding the minimum element?', 'correct_answer' => 'Selection Sort', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9],

            // Art (10 Questions)
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Which art movement is characterized by the use of abstract forms and is associated with artists like Wassily Kandinsky?', 'correct_answer' => 'Abstract Expressionism', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'What is the technique where an artist applies paint in thick layers?', 'correct_answer' => 'Impasto', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'What is the process of creating an image by carving into a surface called?', 'correct_answer' => 'Engraving', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Which art movement is known for its bright colors, bold shapes, and use of commercial techniques like advertising?', 'correct_answer' => 'Pop Art', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Which art technique involves painting with water-based pigments on wet plaster?', 'correct_answer' => 'Fresco', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Which 20th-century art movement focuses on geometric shapes and monochromatic colors?', 'correct_answer' => 'Minimalism', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Who is known for creating the Mona Lisa?', 'correct_answer' => 'Leonardo da Vinci', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Which art movement is characterized by dream-like scenes, bizarre imagery, and a sense of irrationality?', 'correct_answer' => 'Surrealism', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'Which artist is known for his work "The Persistence of Memory," featuring melting clocks?', 'correct_answer' => 'Salvador Dalí', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'Art', 'subtopic' => 'Art Basics', 'question_text' => 'What is the technique of painting with oil-based pigments known for its ability to blend colors smoothly?', 'correct_answer' => 'Oil painting', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9],

            // Music (10 Questions)
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'What is the term for the distance between two pitches in music?', 'correct_answer' => 'Interval', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 0],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which genre of music is characterized by the use of improvisation and swing rhythms?', 'correct_answer' => 'Jazz', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 1],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'What is the name of the scale that consists of five notes, often used in folk music?', 'correct_answer' => 'Pentatonic scale', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 2],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which music genre is known for its use of electric guitars, fast rhythms, and energetic performances?', 'correct_answer' => 'Rock', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 3],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'What is the musical term for a gradual increase in volume?', 'correct_answer' => 'Crescendo', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 4],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which famous composer wrote "Symphony No. 9," also known as the "Ode to Joy"?', 'correct_answer' => 'Ludwig van Beethoven', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 5],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which music genre emerged in the early 20th century and is characterized by its use of blues and swing rhythms?', 'correct_answer' => 'Jazz', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 6],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which famous music band is known for albums like "The Dark Side of the Moon" and "The Wall"?', 'correct_answer' => 'Pink Floyd', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 7],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which composer is known for his famous work "The Four Seasons"?', 'correct_answer' => 'Antonio Vivaldi', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 8],
            ['topic' => 'Music', 'subtopic' => 'Music Basics', 'question_text' => 'Which genre of music is known for its rhythmic spoken word and its origins in African-American communities?', 'correct_answer' => 'Hip Hop', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp, 'subquestion_no' => 9]

        ]);
    }
}
