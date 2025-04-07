@extends('layouts.app')


        


        @section('content')
<!-- Main Content -->

            <!-- Search Bar & Date -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <input type="text" class="form-control w-50 shadow-sm" placeholder="🔍 Search for quizzes...">
                <span class="text-secondary fw-bold">{{ \Carbon\Carbon::now()->toFormattedDateString() }}</span>
            </div>

            <!-- Welcome Block -->
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body">
                    <h4 class="fw-bold text-primary">👋 Welcome back, {{ Auth::user()->name }}!</h4>
                    <p class="text-muted mb-0">Here’s a quick summary of your recent activity.</p>
                </div>
            </div>

            <div class="row">
                <!-- Last Quiz Result -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 bg-light rounded-3">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-primary">📊 Last Quiz Result</h5>
                            <p class="text-muted">Your latest score:</p>
                            <h3 class="fw-bold text-success">✅ 85%</h3>
                            <a href="{{ route('quiz.index') }}" class="btn btn-outline-primary mt-2">Take Another Quiz</a>
                        </div>
                    </div>
                </div>

                <!-- Recent Progress -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 bg-light rounded-3">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-primary">🚀 Recent Progress</h5>
                            <p class="text-muted">You're improving every day! Keep it up. 💪</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Sections -->
            <div class="card shadow-sm mt-4 border-0">
                <div class="card-body">
                    <h5 class="fw-bold">🆕 New Updates</h5>
                    <p class="text-muted">Stay tuned for upcoming features and quizzes!</p>
                    <button class="btn btn-outline-primary">🔍 View Updates</button>
                </div>
            </div>
        
 
@endsection