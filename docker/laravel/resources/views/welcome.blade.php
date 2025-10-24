<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docker Test Page</title>
    <script type="module" src="{{ Vite::asset('resources/js/app.jsx') }}"></script>
</head>
<body>
    <h1>Laravel Docker Test</h1>
    <p>APP_URL: {{ $appUrl }}</p>
    <p>VITE_APP_URL: {{ $VITE_APP_URL }}</p>
    <p>DB Status: {{ $dbStatus }}</p>

    <div id="react-root"></div>
</body>
</html>
