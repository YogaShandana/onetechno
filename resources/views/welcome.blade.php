<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>one techno porto</title>
    <link rel="icon" type="image/png" href="{{ asset('img/tab.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
</body>
</html>