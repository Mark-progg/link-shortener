<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LinkShortener</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; padding: 2rem; max-width: 800px; margin: 0 auto; }
        label { display: block; margin-bottom: 0.25rem; font-weight: 600; }
        input { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 6px; }
        button { background: #4f46e5; color: white; padding: 0.5rem 1rem; border: none; border-radius: 6px; cursor: pointer; }
        button:hover { background: #4338ca; }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
