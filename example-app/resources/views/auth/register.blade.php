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
    <link href="{{ asset('frontend/main_css/register.css') }}" rel="stylesheet">
    <!-- FAVICON -->
  <link href="{{ asset('frontend/favicon.ico')}}" rel="shortcut icon">

    <title>BD Cargo Test</title>
  </head>
  <body>
  <div class="card">
      <div class="card-header" style="background-color:#4895ef;color:white">
    <h2>Registration</h2>
  </div>
  <div class="card-body">
        <x-jet-validation-errors class="mb-4 text-danger" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
            <div class="col">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" aria-label="Name" required>
            </div>
            <div class="col">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email" required>
            </div>
            </div><br>

            <div class="row">
            <div class="col">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Password" required>
                <input type="checkbox" onclick="passwordVisable()"/>
                          <label class="control control-checkbox">Show password
                        </label>
            </div>
            <div class="col">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" aria-label="Confirm Password" required>
            </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <div class="ml-4">
            <button type="submit" class="button2">Register</button>
            </div>
            <a href="{{ route('login') }}" class="text-decoration-none text-success">Already registered?Login here</a>
            </div>
        </form>
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
