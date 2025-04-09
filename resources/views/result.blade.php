<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Mass Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-4">Your Index Mass Result</h1>
                    <div class="result text-center">
                        <h2>Height: {{$height}} Weight: {{$mass}}</h2>
                        <div class="p-3 rounded text-white text-center mb-4
                        @if($index < 18.5)
                            bg-warning
                        @elseif($index >= 18.5 && $index <= 24.9)
                            bg-success
                        @elseif($index >= 25 && $index <= 29.9)
                            bg-warning
                        @else
                            bg-danger
                        @endif
                        ">
                            <h2>Your BMI is: {{ number_format($index, 2) }}</h2>
                        </div>
                        <p class="mt-4">
                            @if($index < 18.5)
                                <span class="badge bg-warning">Underweight</span>
                            @elseif($index >= 18.5 && $index <= 24.9)
                                <span class="badge bg-success">Normal weight</span>
                            @elseif($index >= 25 && $index <= 29.9)
                                <span class="badge bg-warning">Overweight</span>
                            @else
                                <span class="badge bg-danger">Obese</span>
                            @endif
                        </p>
                        <form action="/calculator" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="mass" class="form-label">Weight (kg):</label>
                                <input class="form-control" id="mass" name="mass" required>
                            </div>

                            <div class="mb-3">
                                <label for="height" class="form-label">Height (cm):</label>
                                <select name="measuring" id="measuring">
                                    <option value="cm" selected>Centimeter</option>
                                    <option value="m">Meter</option>
                                </select>
                                <input class="form-control" id="height" name="height" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Calculate BMI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
