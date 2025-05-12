<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Kitoblar API</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: url('https://moewalls.com/wp-content/uploads/2024/11/sukuna-x-gojo-jujutsu-kaisen-thumb.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .btn {
      padding: 20px 50px;
      font-size: 24px;
      color: #fff;
      background: rgba(0, 0, 0, 0.6);
      border: 2px solid #fff;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s ease;
      backdrop-filter: blur(4px);
    }

    .btn:hover {
      background: rgba(255, 255, 255, 0.8);
      color: #000;
      border-color: #000;
    }
  </style>
</head>
<body>
  <button class="btn" onclick="window.location.href='http://127.0.0.1:8000/api/books'">
    Kitoblarga O‘tish
  </button>
</body>
</html>