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

    <title>BD Cargo Test</title>
  </head>
  <body>
      <!--Log in container-->
      <div class="card">
      <div class="card-header" style="background-color:#52b788;color:white">
    <h2>Reset password</h2>
  </div>
  <div class="card-body">
  <x-jet-validation-errors class="mb-4 text-danger" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Your email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ $request->email }}">
            </div>
            </div>
            <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control form-control-sm" id="password" name="password" required>
            </div>
            </div>
            <div class="mb-3 row">
            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm your new password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control form-control-sm" id="password_confirmation" name="password_confirmation" required>
            </div>
            </div>
            <input type="checkbox" onclick="passwordVisable()"/>
                          <label class="control control-checkbox">Show password
                        </label>
                        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-sm btn-warning text-white">Reset</button>
            </div>
        <script>
function passwordVisable() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
        </body>
</html>
