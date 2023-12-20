
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div>
        @yield('content')
    </div>
</body>
</html>
