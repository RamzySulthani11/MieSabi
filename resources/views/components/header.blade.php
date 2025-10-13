<!-- <div>
    It is never too late to be what you might have been. - George Eliot
</div> -->

<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Hegarty&family=Caprasimo&family=DM+Serif+Text:ital@0;1&family=Montserrat:ital,wght@0,700;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">

  </head>
  <body>
   <nav class="navbar navbar-expand-lg mb-5">
    <div class="container-fluid px-5">
      <a class="navbar-brand me-5" href="#">
        <img src="{{ asset('img/logo.png') }}" width="175" alt="Logo" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav gap-5">
          <li class="nav-item"><a class="nav-link active" href="/beranda">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link " href="/menu">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="/keranjang">Keranjang</a></li>
          <li class="nav-item"><a class="nav-link" href="/pesanan">Pesanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Ulasan</a></li>
        </ul>

        <div class="d-flex align-items-center">
          <form class="d-flex me-3" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
          </form>
          <button class="btn btn-dark">
            <!-- Authentication -->
             <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-responsive-nav-link :href="route('logout')"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                      {{ __('Log Out') }}
              </x-responsive-nav-link>
            </form>
                  </button>
                  </div>
                </div>
              </div>
            </nav>