<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->topic }} Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        td, th {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                Dashboard
            </a>
            <a class="navbar-brand" href="#">
                Questions
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User Name
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Quiz Content -->
    <div class="container mt-5">
        <h2>{{ $quiz->topic }} Quiz</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <p><strong>1. What is the capital of France?</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="Berlin" id="q1a1">
                    <label class="form-check-label" for="q1a1">Berlin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="Madrid" id="q1a2">
                    <label class="form-check-label" for="q1a2">Madrid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="Paris" id="q1a3">
                    <label class="form-check-label" for="q1a3">Paris</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="Rome" id="q1a4">
                    <label class="form-check-label" for="q1a4">Rome</label>
                </div>
            </div>

            <div class="mb-4">
                <p><strong>2. What is 5 + 7?</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="10" id="q2a1">
                    <label class="form-check-label" for="q2a1">10</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="11" id="q2a2">
                    <label class="form-check-label" for="q2a2">11</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="12" id="q2a3">
                    <label class="form-check-label" for="q2a3">12</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="13" id="q2a4">
                    <label class="form-check-label" for="q2a4">13</label>
                </div>
            </div>

            <div class="mb-4">
                <p><strong>3. What is the largest planet in the solar system?</strong></p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="Earth" id="q3a1">
                    <label class="form-check-label" for="q3a1">Earth</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="Mars" id="q3a2">
                    <label class="form-check-label" for="q3a2">Mars</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="Jupiter" id="q3a3">
                    <label class="form-check-label" for="q3a3">Jupiter</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="Saturn" id="q3a4">
                    <label class="form-check-label" for="q3a4">Saturn</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit Quiz</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
