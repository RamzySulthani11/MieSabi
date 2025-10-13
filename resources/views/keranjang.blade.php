<x-header/>

<div class="container my-5">
  <div class="row g-4">
    <!-- LEFT SIDE: Cart Items -->
    <div class="col-12 col-lg-6">
      <div class="p-4 rounded-3" style="background-color: #8C2C00; color: #fff;">
        <h4 class="fw-bold mb-4">Keranjang</h4>

        <!-- CART ITEM -->
        <div class="card mb-3 shadow-sm">
          <div class="row g-0">
            <div class="col-4">
              <img src="{{ asset('img/menu/mieayamjumbo.png') }}" class="img-fluid rounded-start" alt="Mie Ayam JUMBO">
            </div>
            <div class="col-8 d-flex flex-column justify-content-between p-3">
              <div>
                <h5 class="fw-bold text-dark mb-1">Mie Ayam JUMBO</h5>
                <p class="text-danger fw-semibold mb-2">Rp. 27.000</p>
              </div>

              <!-- VARIANT SELECTION -->
              <div class="variant-section mb-2">
                <label class="fw-semibold text-dark small">Pilih varian anda</label>
                <div class="d-flex flex-column gap-2 mt-2">
                  <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                    <span>Original</span>
                    <div class="d-flex align-items-center gap-2">
                      <button class="btn btn-sm btn-light variant-minus">-</button>
                      <span class="variant-count">0</span>
                      <button class="btn btn-sm btn-light variant-plus">+</button>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                    <span>Yamin</span>
                    <div class="d-flex align-items-center gap-2">
                      <button class="btn btn-sm btn-light variant-minus">-</button>
                      <span class="variant-count">0</span>
                      <button class="btn btn-sm btn-light variant-plus">+</button>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                    <span>Chili Oil</span>
                    <div class="d-flex align-items-center gap-2">
                      <button class="btn btn-sm btn-light variant-minus">-</button>
                      <span class="variant-count">0</span>
                      <button class="btn btn-sm btn-light variant-plus">+</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MAIN QUANTITY -->
              <div class="d-flex align-items-center justify-content-end gap-3 mt-3">
                <div class="d-flex align-items-center gap-2 quantity-control">
                  <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 minus-btn" style="width:28px; height:28px;">
                    <i class="bi bi-dash"></i>
                  </button>
                  <span class="fw-bold text-dark quantity-value">2</span>
                  <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 plus-btn" style="width:28px; height:28px;">
                    <i class="bi bi-plus"></i>
                  </button>
                </div>
                <i class="bi bi-trash text-secondary"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3 shadow-sm">
          <div class="row g-0">
            <div class="col-4">
              <img src="{{ asset('img/menu/mieayamjumbo.png') }}" class="img-fluid rounded-start" alt="Mie Ayam JUMBO">
            </div>
            <div class="col-8 d-flex flex-column justify-content-between p-3">
              <div>
                <h5 class="fw-bold text-dark mb-1">Mie Ayam Komplit</h5>
                <p class="text-danger fw-semibold mb-2">Rp. 20.000</p>
              </div>

              <!-- VARIANT SELECTION -->
              <div class="variant-section mb-2">
                <label class="fw-semibold text-dark small">Pilih varian anda</label>
                <div class="d-flex flex-column gap-2 mt-2">
                  <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                    <span>Original</span>
                    <div class="d-flex align-items-center gap-2">
                      <button class="btn btn-sm btn-light variant-minus">-</button>
                      <span class="variant-count">0</span>
                      <button class="btn btn-sm btn-light variant-plus">+</button>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                    <span>Yamin</span>
                    <div class="d-flex align-items-center gap-2">
                      <button class="btn btn-sm btn-light variant-minus">-</button>
                      <span class="variant-count">0</span>
                      <button class="btn btn-sm btn-light variant-plus">+</button>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                    <span>Chili Oil</span>
                    <div class="d-flex align-items-center gap-2">
                      <button class="btn btn-sm btn-light variant-minus">-</button>
                      <span class="variant-count">0</span>
                      <button class="btn btn-sm btn-light variant-plus">+</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MAIN QUANTITY -->
              <div class="d-flex align-items-center justify-content-end gap-3 mt-3">
                <div class="d-flex align-items-center gap-2 quantity-control">
                  <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 minus-btn" style="width:28px; height:28px;">
                    <i class="bi bi-dash"></i>
                  </button>
                  <span class="fw-bold text-dark quantity-value">2</span>
                  <button class="btn btn-outline-secondary btn-sm rounded-circle p-0 plus-btn" style="width:28px; height:28px;">
                    <i class="bi bi-plus"></i>
                  </button>
                </div>
                <i class="bi bi-trash text-secondary"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- RIGHT SIDE: Order Method -->
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

        <div class="mb-4">
          <label class="form-label small text-warning">Masukkan alamat dan nomor Anda di sini...</label>
          <textarea class="form-control" rows="3" placeholder="Alamat lengkap...">Jalan Hud II No.48 A, Kebonjeruk, Jakarta Barat 11480 (089635603182)</textarea>
        </div>

        <div class="text-end">
          <button class="btn btn-dark px-4 py-2 rounded-pill shadow-sm"><a href="/rincian" class="text-white text-decoration-none">CheckOut</a></button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Pickup Option Logic
  document.querySelectorAll('.option-btn').forEach(button => {
    button.addEventListener('click', () => {
      document.querySelectorAll('.option-btn').forEach(btn => {
        btn.classList.remove('active');
        btn.querySelector('.check-icon').style.display = 'none';
      });
      button.classList.add('active');
      button.querySelector('.check-icon').style.display = 'block';
    });
  });

  // Quantity Control + Variant Control
  document.querySelectorAll('.card').forEach(card => {
    const quantityValue = card.querySelector('.quantity-value');
    const minusBtn = card.querySelector('.minus-btn');
    const plusBtn = card.querySelector('.plus-btn');
    const variantCounts = card.querySelectorAll('.variant-count');

    function getTotalVariantCount() {
      return Array.from(variantCounts).reduce((sum, el) => sum + parseInt(el.textContent), 0);
    }

    // Update total item quantity
    minusBtn.addEventListener('click', () => {
      let val = parseInt(quantityValue.textContent);
      if (val > 1) {
        val--;
        quantityValue.textContent = val;
        // Adjust variants if they exceed new total
        let totalVariants = getTotalVariantCount();
        while (totalVariants > val) {
          for (let vc of variantCounts) {
            if (parseInt(vc.textContent) > 0 && totalVariants > val) {
              vc.textContent = parseInt(vc.textContent) - 1;
              totalVariants--;
            }
          }
        }
      }
    });

    plusBtn.addEventListener('click', () => {
      let val = parseInt(quantityValue.textContent);
      quantityValue.textContent = val + 1;
    });

    // Variant plus/minus logic
    card.querySelectorAll('.variant-plus').forEach((btn) => {
      btn.addEventListener('click', () => {
        const countEl = btn.parentElement.querySelector('.variant-count');
        const totalVariants = getTotalVariantCount();
        const totalQty = parseInt(quantityValue.textContent);
        if (totalVariants < totalQty) {
          countEl.textContent = parseInt(countEl.textContent) + 1;
        }
      });
    });

    card.querySelectorAll('.variant-minus').forEach((btn) => {
      btn.addEventListener('click', () => {
        const countEl = btn.parentElement.querySelector('.variant-count');
        let val = parseInt(countEl.textContent);
        if (val > 0) countEl.textContent = val - 1;
      });
    });
  });
</script>
