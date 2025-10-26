<x-header/>

<div class="container my-5">
  <div class="row g-4">
    <!-- LEFT SIDE: Cart -->
    <div class="col-12 col-lg-6">
      <div class="p-4 rounded-3" style="background-color: #8C2C00; color: #fff;">
        <h4 class="fw-bold mb-4">Keranjang</h4>
        @if($items->count() > 0)
        @foreach($items as $item)
        @php
        $qty = $item->quantity ?? 1;
        $price = $item->price ?? 0;
        $variants = $item->variants ?? ['Original' => 0, 'Yamin' => 0, 'Chili Oil' => 0];
        @endphp
        <div class="card mb-3 shadow-sm border-0">
              <div class="row g-0">
                <div class="col-4">
                  <img src="{{ asset('img/menu/' . $item->code_product . '.png') }}" 
                       class="img-fluid rounded-start" 
                       alt="{{ $item->name }}">
                </div>

                <div class="col-8 d-flex flex-column justify-content-between p-3">
                  <div>
                    <h5 class="fw-bold text-dark mb-1">{{ $item->name }}</h5>
                    <p class="text-danger fw-semibold mb-2">Rp {{ number_format($price, 0, ',', '.') }}</p>
                  </div>
                  @if($item->code_product == 'EJ' || $item->code_product == 'ET')
                  <p>Tidak Ada Varian</p>
                  @else
                  <!-- Variant Section -->
                  <div class="variant-section mb-2" data-max="{{ $qty }}">
                    <label class="fw-semibold text-dark small">Pilih varian anda (maks: {{ $qty }})</label>
                    <form action="{{ route('keranjang.update', $item->code_product) }}" method="POST" class="variant-form">
                      @csrf
                      <input type="hidden" name="quantity" value="{{ $qty }}">
                      <input type="hidden" name="variants" class="variants-input" value="{{ json_encode($variants) }}">

                      <div class="d-flex flex-column gap-2 mt-2">
                        @foreach (['Original', 'Yamin', 'Chili Oil'] as $variant)
                          <div class="d-flex align-items-center justify-content-between bg-warning rounded-pill px-3 py-1">
                            <span>{{ $variant }}</span>
                            <div class="d-flex align-items-center gap-2">
                              <button type="button" class="btn btn-sm btn-light variant-minus">-</button>
                              <span class="variant-count" data-variant="{{ $variant }}">{{ $variants[$variant] ?? 0 }}</span>
                              <button type="button" class="btn btn-sm btn-light variant-plus">+</button>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </form>
                  </div>
                  @endif
                  <!-- Quantity Control -->
                  <div class="d-flex align-items-center justify-content-between mt-3">
                    <form action="{{ route('keranjang.update', $item->code_product) }}" method="POST" class="d-flex align-items-center gap-2 m-0">
                      @csrf
                      <button type="submit" name="quantity" value="{{ $qty - 1 }}" 
                              class="btn btn-outline-secondary btn-sm rounded-circle p-0" 
                              style="width:28px; height:28px;" 
                              {{ $qty <= 1 ? 'disabled' : '' }}>
                        <i class="bi bi-dash">-</i>
                      </button>
                      <span class="fw-bold text-dark">{{ $qty }}</span>
                      <button type="submit" name="quantity" value="{{ $qty + 1 }}" 
                              class="btn btn-outline-secondary btn-sm rounded-circle p-0" 
                              style="width:28px; height:28px;">
                        <i class="bi bi-plus">+</i>
                      </button>
                    </form>

                    <!-- Remove Button -->
                    <a href="{{ route('keranjang.remove', $item->code_product) }}" 
                       class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1">
                      <i class="bi bi-trash"></i> Hapus
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        @else
          <!-- Empty cart view -->
          <div class="alert alert-light text-center text-dark rounded-3">
            <h5 class="fw-bold">Keranjang kamu kosong 😢</h5>
            <p class="mb-3">Kamu belum menambahkan produk ke keranjang.</p>
            <a href="{{ url('/menu') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold shadow-sm">
              <i class="bi bi-arrow-left-circle me-2"></i> Kembali ke Menu
            </a>
          </div>
        @endif
      </div>
    </div>

    <!-- RIGHT SIDE: Order Method -->
    <div class="col-12 col-lg-6">
      <div class="p-4 rounded-3" style="background-color: #8C2C00; color: #fff;">
        <h5 class="fw-bold mb-2">Pilih Metode Pengambilan Pesanan</h5>
        <p class="text-warning mb-4 small">Silakan pilih cara yang paling nyaman untuk menerima pesanan Anda:</p>

        <form id="checkoutForm" action="{{ route('order.create') }}" method="GET">
          <input type="hidden" name="pickup_method" id="pickupMethod" value="gerai">

          <div class="d-flex justify-content-around mb-3" id="pickupOptions">
            <button type="button" class="btn btn-light option-btn d-flex flex-column align-items-center p-3 border-0 rounded-3 shadow-sm active" data-method="gerai">
              <div class="position-relative">
                <img src="{{ asset('img/svg/shop.svg') }}" width="60" alt="Ambil di Gerai">
                <i class="bi bi-check-circle-fill check-icon text-success position-absolute top-0 end-0" style="display:none;"></i>
              </div>
              <small class="mt-2 fw-bold">Ambil di Gerai</small>
            </button>

            <button type="button" class="btn btn-light option-btn d-flex flex-column align-items-center p-3 border-0 rounded-3 shadow-sm" data-method="antar">
              <div class="position-relative">
                <img src="{{ asset('img/svg/truck.svg') }}" width="60" alt="Diantar ke Lokasi">
                <i class="bi bi-check-circle-fill check-icon text-success position-absolute top-0 end-0" style="display:none;"></i>
              </div>
              <small class="mt-2 fw-bold">Diantar ke Lokasi</small>
            </button>
          </div>

          <div class="mb-4">
            <label class="form-label small text-warning">Masukkan Catatan Pesanan anda...</label>
            <textarea class="form-control" rows="3" placeholder="Masukkan Catatan Pesanan anda..." required></textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small text-warning" require>Masukkan alamat dan nomor Anda di sini...</label>
            <textarea class="form-control" rows="3" placeholder="Alamat lengkap..." required></textarea>
          </div>

          <div class="mb-4">
            <label class="form-label small text-warning">Masukkan Detail Alamat....</label>
            <textarea class="form-control" rows="3" placeholder="RT/RW" required></textarea>
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-dark px-4 py-2 rounded-pill shadow-sm text-white">
              CheckOut
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  // UI: Pickup Option Toggle
  document.addEventListener('DOMContentLoaded', function () {
    const optionBtns = document.querySelectorAll('.option-btn');
    const hiddenInput = document.getElementById('pickupMethod');

    optionBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        optionBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        hiddenInput.value = btn.dataset.method;
      });
    });
  });

  document.querySelectorAll('.variant-section').forEach(section => {
  const codeProduct = section.closest('.card').querySelector('a.btn-outline-danger').href.split('/').pop();
  const max = parseInt(section.dataset.max);
  const plusButtons = section.querySelectorAll('.variant-plus');
  const minusButtons = section.querySelectorAll('.variant-minus');

  function updateVariantInDB() {
    const variantCounts = {};
    section.querySelectorAll('.variant-count').forEach(span => {
      variantCounts[span.dataset.variant] = parseInt(span.textContent);
    });

    fetch(`/keranjang/update-variant/${codeProduct}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify({ variants: variantCounts })
    });
  }

  function totalSelected() {
    return Array.from(section.querySelectorAll('.variant-count'))
      .reduce((sum, el) => sum + parseInt(el.textContent), 0);
  }

  plusButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const countEl = btn.parentElement.querySelector('.variant-count');
      let count = parseInt(countEl.textContent);
      if (totalSelected() < max) {
        countEl.textContent = count + 1;
        updateVariantInDB();
      }
    });
  });

  minusButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const countEl = btn.parentElement.querySelector('.variant-count');
      let count = parseInt(countEl.textContent);
      if (count > 0) {
        countEl.textContent = count - 1;
        updateVariantInDB();
      }
    });
  });
});
</script>
