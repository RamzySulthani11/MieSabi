<x-header/>
<?php 
// echo var_dump($product);
?>
<div class="container hero-section-menu">
  <h2 class="text-center mb-4 text-light">Daftar Menu</h2>
  <div class="row g-4">
    <!-- Card 1 -->
    @foreach ($product as $prod)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="menu-card shadow-sm p-3 text-center">
          <img src="{{ asset('img/menu/' . $prod->code_product . '.png') }}" alt="{{ $prod->name }}">
          <h2 class="list-menu-detail mt-2">{{ $prod->name }}</h2>
          <p class="mb-2 fw-bold text-dark">Rp. {{ $prod->price }}</p>
          <div class="d-flex justify-content-center">
            <form action="{{ route('keranjang.add') }}" method="POST">
              @csrf
              <input type="hidden" name="code_product" value="{{ $prod->code_product }}">
              <input type="hidden" name="name" value="{{ $prod->name }}">
              <input type="hidden" name="price" value="{{ $prod->price }}">
              <button type="submit" class="btn btn-warning w-75 mb-2">Keranjang</button>
            </form>
          </div>
          <p class="mt-auto mb-0"><i class="bi bi-hand-thumbs-up"></i> 👍 Terlaris</p>
        </div>
      </div>
    @endforeach


      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
