<x-header/>
<div class="container my-5">
  <div class="row g-4">
    <!-- LEFT SIDE: Cart Items -->
    <div class="col-12 col-lg-6">
      <div class="p-4 rounded-3" style="background-color: #8C2C00; color: #fff;">
        <h4 class="fw-bold mb-4">Keranjang</h4>

        <!-- Cart Item -->
        <div class="card mb-3 shadow-sm">
          <div class="row g-0">
            <div class="col-4">
              <img src="{{ asset('img/menu/mieayamjumbo.png') }}" class="img-fluid rounded-start" alt="Mie Ayam JUMBO">
            </div>
            <div class="col-8 d-flex flex-column justify-content-between p-2">
              <div>
                <h5 class="fw-bold text-dark mb-1">Mie Ayam JUMBO</h5>
                <p class="text-danger fw-semibold mb-2">Rp. 27.000</p>
              </div>
              <div class="d-flex align-items-center justify-content-end gap-3">
                <div class="d-flex align-items-center justify-content-end gap-3">
                  <div class="d-flex align-items-center gap-2 quantity-control">
                      <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 minus-btn" style="width:28px; height:28px;">
                        <i class="bi bi-dash">-</i>
                      </button>
                      <span class="fw-bold text-dark quantity-value">2</span>
                      <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 plus-btn" style="width:28px; height:28px;">
                        <i class="bi bi-plus">+</i>
                      </button>
                    </div>
                  <i class="bi bi-trash text-secondary"></i>
              </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Another Cart Item -->
        <div class="card mb-3 shadow-sm">
          <div class="row g-0">
            <div class="col-4">
              <img src="{{ asset('img/menu/mieayamkomplit.png') }}" class="img-fluid rounded-start" alt="Mie Ayam Komplit">
            </div>
            <div class="col-8 d-flex flex-column justify-content-between p-2">
              <div>
                <h5 class="fw-bold text-dark mb-1">Mie Ayam Komplit</h5>
                <p class="text-danger fw-semibold mb-2">Rp. 20.000</p>
              </div>
              <div class="d-flex align-items-center justify-content-end gap-3">
                  <div class="d-flex align-items-center gap-2 quantity-control">
                      <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 minus-btn" style="width:28px; height:28px;">
                        <i class="bi bi-dash">-</i>
                      </button>
                      <span class="fw-bold text-dark quantity-value">2</span>
                      <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 plus-btn" style="width:28px; height:28px;">
                        <i class="bi bi-plus">+</i>
                      </button>
                    </div>
                  <i class="bi bi-trash text-secondary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE: Order Method + Address -->
    <div class="col-12 col-lg-6">
      <div class="p-4 rounded-3" style="background-color: #8C2C00; color: #fff;">
        <h5 class="fw-bold mb-2">Pilih Metode Pengambilan Pesanan</h5>
        <p class="text-warning mb-4 small">Silakan pilih cara yang paling nyaman untuk menerima pesanan Anda:</p>

        <div class="d-flex justify-content-around mb-3" id="pickupOptions">
          <button class="btn btn-light option-btn d-flex flex-column align-items-center p-3 border-0 rounded-3 shadow-sm active">
            <div class="position-relative">
              <img src="{{ asset('img/svg/shop.svg') }}" width="60" alt="Ambil di Gerai">
              <i class="bi bi-check-circle-fill check-icon text-success position-absolute top-0 end-0" style="display: none;"></i>
            </div>
            <small class="mt-2 fw-bold">Ambil di Gerai</small>
          </button>

          <button class="btn btn-light option-btn d-flex flex-column align-items-center p-3 border-0 rounded-3 shadow-sm">
            <div class="position-relative">
              <img src="{{ asset('img/svg/truck.svg') }}" width="60" alt="Diantar ke Lokasi">
              <i class="bi bi-check-circle-fill check-icon text-success position-absolute top-0 end-0" style="display: none;"></i>
            </div>
            <small class="mt-2 fw-bold">Diantar ke Lokasi</small>
          </button>
        </div>

        <!-- Address Input -->
        <div class="mb-4">
          <label class="form-label small text-warning">Masukkan alamat dan nomor Anda di sini...</label>
          <textarea class="form-control" rows="3" placeholder="Alamat lengkap...">Jalan Hud II No.48 A, Kebonjeruk, Jakarta Barat 11480 (089635603182)</textarea>
        </div>

        <div class="text-end">
          <button class="btn btn-dark px-4 py-2 rounded-pill shadow-sm">Checkout</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll('.option-btn').forEach(button => {
    button.addEventListener('click', () => {
      // Remove active from all
      document.querySelectorAll('.option-btn').forEach(btn => {
        btn.classList.remove('active');
        btn.querySelector('.check-icon').style.display = 'none';
      });
      
      // Set active on clicked one
      button.classList.add('active');
      button.querySelector('.check-icon').style.display = 'block';
    });
  });

  document.querySelectorAll('.quantity-control').forEach(control => {
    const minusBtn = control.querySelector('.minus-btn');
    const plusBtn = control.querySelector('.plus-btn');
    const valueEl = control.querySelector('.quantity-value');

    minusBtn.addEventListener('click', () => {
      let value = parseInt(valueEl.textContent);
      if (value > 1) value--; // prevent going below 1
      valueEl.textContent = value;
    });

    plusBtn.addEventListener('click', () => {
      let value = parseInt(valueEl.textContent);
      valueEl.textContent = value + 1;
    });
  });
</script>

