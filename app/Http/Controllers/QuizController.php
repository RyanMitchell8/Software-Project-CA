<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
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
        // Fetch a single quiz by ID
        $quiz = Quiz::findOrFail($id);

        // Pass the quiz to the view
        return view('quizzes.show', compact('quiz'));
    }


    public function submit(Request $request, $quiz_id)
    {
        $quiz = Quiz::findOrFail($quiz_id);
        $questions = $quiz->questions()->get();
        $user_id = Auth::id();

        $score = 0;

        foreach ($questions as $question) {
            $selected_answer = $request->input("answers.{$question->id}");
            $is_correct = $selected_answer == $question->correct_answer ? 1 : 0;

            // StudentAnswer::create([
            //     'user_id' => $user_id,
            //     'question_id' => $question->id,
            //     'selected_answer' => $selected_answer,
            //     'is_correct' => $is_correct,
            // ]);

            if ($is_correct) {
                $score++;
            }
        }

        return view('quiz.result', compact('score', 'questions', 'quiz_id'));
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
