<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }}</title>
    <!-- <link rel="stylesheet" href="{{ asset(path: 'assets/css/style.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <x-style /> -->
    
</head>

<body class="bg-background text-foreground font-sans antialiased text-sm">
    <x-header />
    {{ $slot }}
    <x-footer />
    <x-scripts />
</body>

</html>