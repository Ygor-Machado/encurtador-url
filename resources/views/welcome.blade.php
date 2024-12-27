<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
<body>
<h1>URL Shortener</h1>
<form method="POST" action="{{ route('url.shorten') }}">
    @csrf
    <label for="long_url">Coloque a URL:</label>
    <input type="url" id="long_url" name="long_url" placeholder="https://example.com" required>
    <button type="submit">Encurte a URL</button>
</form>
</body>
</html>
