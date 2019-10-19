<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("public/storage/images/favicon.png") }}">

    @include("layouts.header-links")
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.css">
    <!--  CSS -->
    

    
</head>

<body>

    

    <!-- Begin : Header  -->

    @include("layouts.header-after-login")
  
    <!-- End : Header --->

   
    @yield("content")


    <!--- Begin:  Footer --->
    
    @include("layouts.footer")
</body>

</html>