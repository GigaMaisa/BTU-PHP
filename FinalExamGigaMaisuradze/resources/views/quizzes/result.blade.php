<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz Result</title>

</head>

<body>

    <h1>{{ $quiz->name }}</h1>
    <p>You scored {{ $score }} out of {{ $total }}</p>

</body>
</html>
