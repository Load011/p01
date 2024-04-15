<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    
    <!-- X-UA-Compatible meta tag for specifying the rendering engine compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- CSS stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Additional head scripts or meta tags can go here -->
</head>
<body>
    
    <!-- Include the navbar -->
    @include('includes.navbar')
    
    <!-- Include the main sidebar -->
    @include('includes.sidebar')

    <!-- Your app content goes here -->    
    <!-- JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Additional scripts -->
</body>
</html>
