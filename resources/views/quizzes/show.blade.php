@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center fw-bold text-primary">{{ $quiz->topic }} - {{ $quiz->subtopic }}</h2>

    <div class="card shadow-lg p-4 mt-4">
        <form action="{{ route('quiz.submit', $quiz->id) }}" method="POST">
            @csrf
            <ul class="list-group list-group-flush">
                @foreach($questions as $question)
                    @php
                        $answers = $question->answers->shuffle();
                    @endphp

                    <li class="list-group-item py-4">
                        <strong class="d-block">{{ $loop->iteration }}. {{ $question->question_text }}</strong>
                        
                        @foreach($answers as $answer)
                            <div class="form-check mt-2">
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
            
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-lg btn-success fw-bold px-5">✅ Submit Quiz</button>
            </div>
        </form>
    </div>
</div>
@endsection
