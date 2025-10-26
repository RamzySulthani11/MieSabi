<x-header/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<style>
.card-beranda h2{
font-family: "Caprasimo", serif;
  font-weight: 400;
  font-style: normal;
    }
.card-beranda p{
   font-family: Arial, Helvetica, sans-serif;
  font-weight: 100;
  font-style: normal;
}

.card-beranda .text-open{
  font-family: "Caprasimo", serif;
  font-weight: 200;
  font-style: normal;
}



</style>


<div><h4>Selamat Datang, {{ Auth::user()->name }}</h4></div>

<div class="hero-section mx-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-20">
                    <div class="card-beranda">
                        <img class="location-img animate__animated animate__backInRight " src="{{ asset('img/location.png') }}" width="100%" height="600" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-beranda">
                        <h2><img src="{{ asset('img/logo.png') }}" width="100px" alt=""></h2>
                    </div>
                    <div class="card-beranda">
                        <h2 class="animate__animated animate__backInRight">Mie Ayam Sabi <span class="text-warning">From Local Roots to Your Table</span></h2>
                        <p class="animate__animated animate__backInRight">Nikmati semangkuk mie ayam dengan cita rasa tradisional yang kaya rempah dan menggugah selera.</p>
                    </div>
                    <div class="card-beranda">
                        <h2 class="text-center mt-5 animate__animated animate__backInLeft">BUKA DI PUKUL 08:00 - 22:00 WIB</h2>
                        <p class="text-center m-3 animate__animated animate__backInLeft">Selamat datang di Dashboard MieSabi — kelola pesanan dan pantau penjualan mie ayam Anda dengan mudah dan cepat</p>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
<x-footer/>