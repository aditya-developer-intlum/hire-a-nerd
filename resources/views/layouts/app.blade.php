<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hire A Nerd @yield("title")</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("public/storage/images/favicon.png") }}">
    <!--  CSS -->
    

    @include("layouts.header-links")
</head>

<body>

    <!-- Begin : Header  -->


@if(Auth::check())
  
    @if(Auth::user()->mode == 2)

        @include("layouts.seller-header")

    @else

        @include("layouts.header-after-login")
    @endif

@else
    @include("layouts.header-before-login")
@endif
    <!-- End : Header --->

    @yield("content")


    <!--- Begin:  Footer --->
    
    @include("layouts.footer")
</body>

</html>