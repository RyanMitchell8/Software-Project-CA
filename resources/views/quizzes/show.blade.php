<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Quizzes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>{{ $quiz->topic }} - {{ $quiz->subtopic }}</h2>

    <form action="{{ route('quiz.submit', $quiz->id) }}" method="POST">
        @csrf
        <ul class="list-group">
            @foreach($questions as $question)
                <li class="list-group-item">
                    <strong>{{ $loop->iteration }}. {{ $question->question_text }}</strong>

                    @php
                        $answers = $question->answers->shuffle()->take(3);
                    @endphp

                    @foreach($answers as $answer)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" 
                                value="{{ $answer->id }}" required>
                            <label class="form-check-label">
                                {{ $answer->answer_text }}
                            </label>
                        </div>
                    @endforeach
                </li>
            @endforeach
        </ul>
        
        <button type="submit" class="btn btn-primary mt-3">Submit Quiz</button>
    </form>
</div>
@endsection

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
