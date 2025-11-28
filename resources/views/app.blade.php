<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LinkShortener</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; padding: 2rem; max-width: 800px; margin: 0 auto; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.25rem; font-weight: 600; }
        input { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 6px; }
        button { background: #4f46e5; color: white; padding: 0.5rem 1rem; border: none; border-radius: 6px; cursor: pointer; }
        button:hover { background: #4338ca; }
        .error { color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem; }
        .alert { padding: 0.5rem; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 6px; margin-bottom: 1rem; }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
