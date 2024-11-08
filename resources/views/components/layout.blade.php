<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    @vite(['/resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('partials.navigation')

    @if (@session('status'))
    <div>{{ session('status') }}</div>
    @endif

    {{ $slot }}

    @if (isset($sidebar))

    <div id="sidebar">
        <h3>Sidebar</h3>
        {{ $sidebar }}
    </div>

    @endif

</body>
</html>
