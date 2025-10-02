<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    @vite('resources/css/app.css') <!-- if using Laravel with Vite + Tailwind -->
    <style>
        /* fallback basic styling if Tailwind is not set up */
        body {
            font-family: Arial, sans-serif;
            background: #f9fafb;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 5rem auto;
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2563eb;
        }
        p {
            margin-top: 1rem;
            color: #555;
        }
        a {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }
        a:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👋 Welcome to Technosoft</h1>
        <p>This is your Laravel welcome page.</p>
        <a href="{{ route('login') }}">Go to Login</a>
    </div>
</body>
</html>
