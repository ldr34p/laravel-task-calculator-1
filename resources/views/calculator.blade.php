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
                    <h1 class="text-center mb-4">Index Mass Calculator</h1>
                    <form action="/calculator" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="mass" class="form-label">Weight (kg):</label>
                            <input class="form-control" id="mass" name="mass" required>
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label">Height:</label>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
