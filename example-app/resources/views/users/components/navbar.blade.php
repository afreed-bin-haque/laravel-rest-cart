<nav class="navbar navbar-expand-lg navbar-light" id="mainnav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('dashboard') }}">BD Express Cargo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();" class="btn btn-warning text-decoration-none" style="border-radius: 15px;">
                                    Logout
                                </a>
                            </form>
                            </ul>
    </div>
  </div>
</nav>
