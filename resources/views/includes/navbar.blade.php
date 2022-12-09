<!-- Navbar -->
<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand">
      <img src="{{ route('frontend/images/logo_nomads.jpg') }}" alt="NMADS">
    </a>
    <button
      class="navbar-toggler navbar-toggler-right"
      type="button"
      data-toggle="collapse"
      data-target="#navb"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-3"><a href="#" class="nav-link active">Home</a></li>
        <li class="nav-item mx-md-3"><a href="#" class="nav-link">Paket Travel</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
            Services
          </a>
          <div class="dropdown-menu" id="dropdown">
            <a href="#" class="dropdown-item">Link 1</a>
            <a href="#" class="dropdown-item">Link 2</a>
            <a href="#" class="dropdown-item">Link 3</a>
          </div>
        </li>
        <li class="nav-item mx-md-3"><a href="#" class="nav-link">Testimonial</a></li>
      </ul>
      <!-- Mobile Button -->
      <form action="#" class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0 px-4">
          Masuk
        </button>
      </form>

      <!-- Desktop Button -->
      <form action="#" class="form-inline d-none d-md-block">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
          Masuk
        </button>
      </form>
    </div>
  </nav>
</div>