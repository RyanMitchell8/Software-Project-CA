@extends('layouts.app')


        

@section('content')
<!-- Quiz List -->

            <h2 class="mb-4 text-center fw-bold">📚 Available Quizzes</h2>
            
            <div class="row g-4">
                @foreach ($questions as $question)
                    <div class="col-md-4">
                        <div class="card quiz-card shadow-lg border-0 rounded-4 h-100">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title fw-bold text-primary">{{ $question->topic }}</h4>
                                <h6 class="text-muted">{{ $question->subtopic }}</h6>
                                <p class="text-dark flex-grow-1">{{ $question->question_text }}</p>
                                
                                <!-- Form to Submit the Quiz -->
                                <form action="{{ route('quiz.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="topic" value="{{ $question->topic }}">
                                    <input type="hidden" name="subtopic" value="{{ $question->subtopic }}">
                                    <button type="submit" class="btn btn-primary w-100 mt-2 fw-bold">🚀 Start Quiz</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
 
@endsection

        