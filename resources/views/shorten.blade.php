<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL encurtada</title>
</head>
<body>
    <h1>URL Encurtada</h1>
    <p>Original URL: <a href="{{ $long_url }}" target="_blank">{{ $long_url }}</a></p>
    <p>Shortened URL: <a href="{{ $short_url }}" target="_blank">{{ $short_url }}</a></p>

    <a href="{{ url('/') }}">Encurte outra URL</a>
</body>
</html>
