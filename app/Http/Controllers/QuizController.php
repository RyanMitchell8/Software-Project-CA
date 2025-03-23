<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all unique topics
        $topics = \App\Models\Question::select('topic')->distinct()->pluck('topic');

        // Get one random question per topic
        $questions = collect();
        foreach ($topics as $topic) {
            
            $question = \App\Models\Question::where('topic', $topic)->inRandomOrder()->first();
            if ($question) {
                $questions->push($question);
            }
        }

        // Eager-load answers for each question
        // $questions->load('answers');

        // Pass data to the view
        return view('quizzes.index', compact('questions'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required|string|max:255',
            'subtopic' => 'required|string|max:255',
        ]);

           $quiz = Quiz::create([
                'user_id' => 1,
                'topic' => $request->topic,
                'subtopic' => $request->subtopic,
                'number_of_questions' => 10,
                'number_questions_correct' => 0, // Default score
           ]);

           return redirect()->route('quiz.show', $quiz->id)->with('success', 'Quiz started successfully!');    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    $quiz = Quiz::findOrFail($id);

    $questions = Question::where('topic', $quiz->topic)
                         ->where('subtopic', $quiz->subtopic)
                         ->inRandomOrder()
                         ->take($quiz->number_of_questions)
                         ->get();

    return view('quizzes.show', compact('quiz', 'questions'));
    }



    public function submit(Request $request, $id)
    {
    // 1. Find the quiz
    $quiz = Quiz::findOrFail($id);

    // 2. Re-fetch the same 10 questions based on topic & subtopic
    $questions = Question::where('topic', $quiz->topic)
                         ->where('subtopic', $quiz->subtopic)
                         ->inRandomOrder()
                         ->take($quiz->number_of_questions)
                         ->get();

    // 3. Check user's answers
    $correctAnswers = 0;

foreach ($questions as $question) {
    $selectedAnswerId = $request->input("answers.{$question->id}");

    if ($selectedAnswerId) {
        $selectedAnswer = \App\Models\Answer::find($selectedAnswerId);

        if (
            $selectedAnswer &&
            strtolower(trim($selectedAnswer->answer_text)) === strtolower(trim($question->correct_answer))
        ) {
            $correctAnswers++;
        }
    }
}


    // 4. Update quiz score
    $quiz->update([
        'number_questions_correct' => $correctAnswers,
    ]);

    //dd($correctAnswers);


    // 5. Redirect or return result
    return redirect()->route('quiz.index')
        ->with('success', "You scored {$correctAnswers}/{$quiz->number_of_questions}!");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
