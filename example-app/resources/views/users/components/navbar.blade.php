<nav class="navbar navbar-expand-lg navbar-light" id="mainnav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('dashboard') }}">BD Express Cargo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#7FCB8D" type="button">
          Hello {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="d-grid gap-2">
                                <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();" class="btn btn-outline-warning text-decoration-none">Log Out
                                </a>
                            </form>
            </li>
          </ul>
        </li>
    </div>
  </div>
</nav>
