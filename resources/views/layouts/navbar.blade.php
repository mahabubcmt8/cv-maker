<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link btn {{ Request::routeIs('user.home') ? 'active' : '' }}" href="{{ route('user.home') }}">
                <i class="fa-solid fa-house"></i><br> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn {{ Request::routeIs('user.personal.index') ? 'active' : '' }}" href="{{ route('user.personal.index') }}">
                <i class="fa-solid fa-user"></i><br> Personal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn" href="#">
                <i class="fa-solid fa-user"></i><br> Education & Training</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn" href="#">
                <i class="fa-solid fa-business-time"></i><br> Employment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn" href="#">
                <i class="fa-solid fa-rectangle-list"></i><br> Other Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn" href="#">
                <i class="fa-solid fa-camera"></i><br> Photo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn" href="#">
                <i class="fa-solid fa-right-from-bracket"></i><br> Sign Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
