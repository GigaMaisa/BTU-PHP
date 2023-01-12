<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giga Maisuradze</title>
  <style>
    body {
      background: linear-gradient(to right, #fd8e55, #aeb470);
    }
    h1 {
      font-size: 3.2rem;
      text-align: center;
      color: whitesmoke;
      margin-top: 15%;
    }
    button {
      display: block;
        width: 160px;
      padding: 25px;
      font-size: 1.45rem;
      background-color: #4CAD95;
      color: whitesmoke;
      border: none;
      text-align: center;
        margin: 30% auto 0;
    }
    button:hover {
      background-color: #33ee77;
    }
  </style>
</head>
<body>
  <h1>Giga Maisuradze</h1>
  <button onclick="location.href='{{ route('quizzes.index') }}'">Get started</button>
</body>
</html>
