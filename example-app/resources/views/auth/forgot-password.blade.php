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
    <link href="{{ asset('frontend/main_css/login.css') }}" rel="stylesheet">
    <!-- FAVICON -->
  <link href="{{ asset('frontend/favicon.ico')}}" rel="shortcut icon">

    <title>Forgot password</title>
  </head>
  <body>

      <!--Log in container-->
      <div class="card">
      <div class="card-header" style="background-color:#52b788;color:white">
    <h2>Forgot Password</h2>
  </div>
  <div class="card-body">
  <x-jet-validation-errors class="mb-4 text-danger" />
        @if (session('status'))
            <div class="text-success">
                {{ session('status') }}
            </div>
        @endif
        <p class="text-primary"> Type your email address and we will send you password reset link</p>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Your old email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" id="email" name="email">
            </div>
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-sm btn-primary">Send link</button>
            <button type="button" class="btn btn-sm btn-outline-dark" onclick="goBack()">Go back</button>
            </div>
        </form>
        <script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
