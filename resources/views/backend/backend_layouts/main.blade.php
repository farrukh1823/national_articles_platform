<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title', 'My new Project')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <style type="text/css">
      body{
        background-image: url({{ asset('images/dot-grid.png') }});
        /*background-repeat: no-repeat;*/
        
      }
      html,
      body,
      header,
      .carousel {
        height: 60vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
          background: #1c2331 !important;
        }
      }
    </style>
  </head>
  <body>
    <div id="app">
      

      <div class="">
        @yield('content')
      </div>
    </div>
   
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/multiselect.min.js') }}"></script>
    

    <!-- Initializations -->
    <script type="text/javascript">
      // Animations initialization
      new WOW().init();
    </script>
  </body>
</html>