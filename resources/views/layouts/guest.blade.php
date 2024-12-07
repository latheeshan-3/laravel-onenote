<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Inline CSS for Dark Theme -->
        <style>
            body {
                margin: 0;
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(145deg, #1e293b, #334155); /* Dark gradient */
                color: #f1f5f9; /* Light text */
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
            .container {
                background: rgba(30, 41, 59, 0.8); /* Glassy background */
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                border-radius: 12px;
                padding: 20px;
                width: 100%;
                max-width: 400px;
            }
            a {
                color: #3b82f6; /* Blue text for links */
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            h1 {
                text-align: center;
                font-size: 1.5rem;
                margin-bottom: 20px;
                color: #e2e8f0; /* Slightly lighter text */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!-- You can add an optional heading if needed -->
            <h1>{{ config('app.name', 'Laravel') }}</h1>

            <!-- Dynamic slot for Blade templates -->
            {{ $slot }}
        </div>
    </body>
</html>
