<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
     <title>@yield('title', 'Newsbox - Modern Magazine &amp; Newspaper HTML Template')</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Page-specific CSS -->
    @yield('style')
</head>
<body>
    <!-- ##### Header Area Start ##### -->
     @include('partials.header')
    <!-- ##### Header Area End ##### -->    

     <!-- ##### Trending News Area Start ##### -->
    @include('partials.trending')
    <!-- ##### Trending News Area End ##### -->

    <!-- Main Content -->
    @yield('content')
    
    <!-- ##### Footer Area Start ##### -->
    @include('partials.footer')
    <!-- ##### Footer Area Start ##### -->

    @yield('script')
</body>
</html>
