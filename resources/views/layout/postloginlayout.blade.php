<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Required meta tags -->
    <!-- Font Awesome CDN -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script
      src="https://kit.fontawesome.com/08513d5644.js"
      crossorigin="anonymous"
    ></script>
    <!-- Font Awesome CDN -->

   <!-- Custom and Bootstrap Styles -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="{{asset('flavicon.ico')}}"/>
   <!-- Styles -->
    <title>@yield('title')</title>
  </head>

  <body class="cc-body">
    <!-- add navbar content-->
    @include('include.postloginnavbar')
    <!-- add content page-->
    @yield('content')
    <!-- add footer content-->

    <!-- Bootstrap JS with Popper Core-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>

