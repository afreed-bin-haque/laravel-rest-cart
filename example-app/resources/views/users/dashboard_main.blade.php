<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/bootstrap5_css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Main CSS-->
    <link href="{{ asset('frontend/main_css/dashboard.css') }}" rel="stylesheet">
    <!-- FAVICON -->
  <link href="{{ asset('frontend/favicon.ico')}}" rel="shortcut icon">

    <title>BD Cargo Test Dashboard</title>
  </head>
  <header>
  @include('users.components.navbar')
  </header>
  <body>
  <div class="content-wrapper" id="elements">
          <div class="content">
          @yield('dashboard_view')
          </div>
          <script src="{{ asset('frontend/bootstrap5_js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
