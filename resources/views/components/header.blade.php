<!-- <div>
    It is never too late to be what you might have been. - George Eliot
</div> -->

<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <style>
      /* Navbar Custom Color */
      .navbar {
        background-color: #8C2C00;
      }
      .nav-link {
        color: white !important;
      }
      .nav-link:hover {
        text-decoration: underline;
      }

      /* Hover Dropdown */
      .dropdown-logo {
        position: relative;
        display: inline-block;
      }

      .dropdown-menu-logo {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        min-width: 180px;
        box-shadow: 0px 6px 12px rgba(0,0,0,0.15);
        border-radius: 8px;
        z-index: 999;
        padding: 10px 0;
        transition: opacity 0.2s ease-in-out;
      }

      .dropdown-logo:hover .dropdown-menu-logo {
        display: block;
        opacity: 1;
      }

      .dropdown-menu-logo a {
        display: block;
        padding: 10px 15px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.2s ease-in-out;
      }

      .dropdown-menu-logo a:hover {
        background-color: #f8f9fa;
      }

      .dropdown-divider {
        height: 1px;
        margin: 0.5rem 0;
        background-color: #ddd;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg mb-5">
      <div class="container-fluid px-5">
        
        <!-- Logo with Dropdown -->
        <div class="dropdown-logo me-5">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" width="175" alt="Logo" />
          </a>
          <div class="dropdown-menu-logo">
            <a href="/profile">Profil</a>
            <a href="/settings">Pengaturan</a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" 
                onclick="event.preventDefault(); this.closest('form').submit();">
                Keluar
              </a>
            </form>
          </div>
        </div>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav gap-5">
            <li class="nav-item"><a class="nav-link active" href="/beranda">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="/keranjang">Keranjang</a></li>
            <li class="nav-item"><a class="nav-link" href="/pesanan">Pesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Ulasan</a></li>
          </ul>

          <!-- Right Side: Search + Logout -->
          <div class="d-flex align-items-center">
            <form class="d-flex me-3" role="search">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            </form>

            <button class="btn btn-dark">
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