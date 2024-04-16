<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P01</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- CSS stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    @include('includes.navbar')
    
    @include('includes.sidebar')

    <script src="{{ asset('js/app.js') }}"></script>
    
  </body>
</html>
