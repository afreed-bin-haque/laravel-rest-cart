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
    <h2>Log In</h2>
  </div>
  <div class="card-body">
  <x-jet-validation-errors class="mb-4 text-danger" />
  @if (session('status'))
            <div class="text-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required autofocus>
            <label for="email">Email address</label>
            </div>

            <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required>
            <label for="password">Password</label>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

                          <input type="checkbox" onclick="passwordVisable()"/>
                          <label class="control control-checkbox">Show password
                        </label>

            <div class="d-grid gap-2">
            <button type="submit" class="button1">Log in</button>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-success">Forgot your password?</a>
                @endif
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                        <a href="{{ route('register') }}" class="text-decoration-none text-primary">No account? Signup Here</a>
                    </div>
                </div>
            </div>
        </form>
  </div>
      <!--Login container end-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('frontend/bootstrap5_js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
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
