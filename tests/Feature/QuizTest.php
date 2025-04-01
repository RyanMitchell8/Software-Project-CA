<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class QuizTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function user_can_submit_quiz_and_get_correct_score()
    {
        // Create a user and authenticate
        $user = User::factory()->create();

        // Create a quiz for the user
        $quiz = Quiz::factory()->create([
            'user_id' => $user->id,
            'topic' => 'Math',
            'subtopic' => 'Algebra',
            'number_of_questions' => 3,
        ]);

        // Create questions for the quiz
        $questions = Question::factory(3)->create([
            'topic' => 'Math',
            'subtopic' => 'Algebra',
            'quiz_id' => $quiz->id,
        ]);

        // Create answers for each question (assuming one correct answer for each)
        foreach ($questions as $question) {
            // Create 3 answers, one correct and two incorrect
            Answer::factory()->create([
                'question_id' => $question->id,
                'answer_text' => $question->correct_answer,
                'is_correct' => true, // Correct answer
            ]);

            // Add two incorrect answers for each question
            Answer::factory(2)->create([
                'question_id' => $question->id,
                'answer_text' => 'Wrong answer',
                'is_correct' => false,
            ]);
        }

        // Prepare answers for submission (assuming user selects correct answers)
        $answers = $questions->mapWithKeys(function ($question) {
            return [$question->id => $question->answers->first()->id]; // Select the correct answer
        });

        // Act as the user and submit the quiz answers
        $response = $this->actingAs($user)->post(route('quiz.submit', $quiz->id), [
            'answers' => $answers,
        ]);

        // Assert that the response redirects to quiz index with success message
        $response->assertRedirect(route('quiz.index'));
        $response->assertSessionHas('success', "You scored 3/3!"); // Assuming all answers are correct
    }

    #[Test]
    public function user_can_submit_quiz_and_get_zero_score_when_answers_are_incorrect()
    {
        // Create a user and authenticate
        $user = User::factory()->create();

        // Create a quiz for the user
        $quiz = Quiz::factory()->create([
            'user_id' => $user->id,
            'topic' => 'Math',
            'subtopic' => 'Algebra',
            'number_of_questions' => 3,
        ]);

        // Create questions for the quiz
        $questions = Question::factory(3)->create([
            'topic' => 'Math',
            'subtopic' => 'Algebra',
            'quiz_id' => $quiz->id,
        ]);

        // Create answers for each question (assuming one correct answer for each)
        foreach ($questions as $question) {
            // Create 3 answers, one correct and two incorrect
            Answer::factory()->create([
                'question_id' => $question->id,
                'answer_text' => $question->correct_answer,
                'is_correct' => true, // Correct answer
            ]);

            // Add two incorrect answers for each question
            Answer::factory(2)->create([
                'question_id' => $question->id,
                'answer_text' => 'Wrong answer',
                'is_correct' => false,
            ]);
        }

        // Prepare answers for submission (user selects incorrect answers)
        $answers = $questions->mapWithKeys(function ($question) {
            // Select the wrong answer for each question (using the second answer)
            return [$question->id => $question->answers->skip(1)->first()->id];
        });

        // Act as the user and submit the quiz answers
        $response = $this->actingAs($user)->post(route('quiz.submit', $quiz->id), [
            'answers' => $answers,
        ]);

        // Assert that the response redirects to quiz index with success message
        $response->assertRedirect(route('quiz.index'));
        $response->assertSessionHas('success', "You scored 0/3!"); // All answers are wrong
    }
}
