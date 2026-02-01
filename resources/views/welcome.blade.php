<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>one techno porto</title>
    <link rel="icon" type="image/png" href="{{ asset('img/tab.png') }}">
    @if(app()->environment('production'))
        <link rel="stylesheet" href="{{ asset('build/assets/app-BC1mE-tT.css') }}">
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-white font-sans antialiased overflow-hidden selection:bg-yellow-400 selection:text-black">
    <div class="scroll-container">
        @include('page1')
        @include('page2')
        @include('page3')
        @include('page4')
    </div>
    @include('contacts')
    @include('faq')
    @include('testimoni')

    @if(app()->environment('production'))
        <script src="{{ asset('build/assets/app-B7xPJ507.js') }}"></script>
    @endif
</body>
</html>