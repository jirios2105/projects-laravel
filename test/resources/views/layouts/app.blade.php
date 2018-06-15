<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
    <div id="app">
        <!-- start nvar-->
        @include('layouts.nvar')
        <!-- end nvar-->


        <!--atart content of application HTML-->
        <main class="py-4">
            @yield('content')
        </main>
        <!--end content og application HTML -->
    </div>
</body>
<!-- scripts -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
  // Or with jQuery
  document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.sidenav');
     var instances = M.Sidenav.init(elems, options);
   });

   // Or with jQuery

   $(document).ready(function(){
     $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
  });



</script>

<!-- start content script-->
@yield('scripts')
<!-- end content script-->
</html>
