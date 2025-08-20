<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hawayi Rozi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">I.T Workers</a></li>
            <li><a class="dropdown-item" href="#">Electritions</a></li>
            <li><a class="dropdown-item" href="#">Nursing staff</a></li>
            <li><a class="dropdown-item" href="#">Plumbers</a></li>
            <li><a class="dropdown-item" href="#">Mechanics</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">

          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
          </a>

          <ul class="dropdown-menu dropdown-menu-end">  
            <li class="ms-3 fw-semibold">Account</li>
            <li class="dropdown-divider"></li>

            <!-- For User -->
            @guest
            <li class="dropdown-submenu dropstart">
              <a class="dropdown-item submenu-toggle" href="#"><i class="fa-solid fa-user"></i> For user</a>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="{{route('user_login_form')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i> User login</a></li>
                <li><a class="dropdown-item" href="{{route('user_register_form')}}"><i class="fa-solid fa-user-plus"></i> User register</a></li>
              </ul>
            </li>

            <!-- For Worker -->
            <li class="dropdown-submenu dropstart">
              <a class="dropdown-item submenu-toggle" href="#"><i class="fa-solid fa-user-gear"></i> For worker</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-plus"></i> Worker register</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-to-bracket"></i> Worker login</a></li>
              </ul>
            </li>  

            @endguest
            
            @auth
            <li><a class="dropdown-item" href="{{route('user_profile')}}"><i class="fa-regular fa-address-card"></i> Your profile</a></li>
                <form action="{{route('logout_user')}}" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                </form>
            @endauth

          </ul>

        </li>

      </ul>
    </div>
  </div>
</nav>