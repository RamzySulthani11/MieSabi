<!-- <div>
    Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant
</div> -->

<x-header/>
<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #a04c00;">
    <div class="card shadow border-0" style="width: 420px; border-radius: 15px;">
        <div class="card-body" style="background-color: #fff; border-radius: 15px;">
            <!-- Rincian Harga -->
            <h5 class="fw-bold mb-3">Rincian Harga</h5>

            <!-- Total Pesanan -->
            <h6 class="fw-semibold mb-3">Total Pesanan</h6>
            <div class="mb-2 d-flex justify-content-between">
                <div>
                    <p class="mb-0">Mie Ayam Komplit<br><small>(Original 1, Yamin 1)</small></p>
                </div>
                <div>
                    <span class="small">x2</span>
                    <span class="fw-semibold text-danger">Rp. 40.000</span>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-between">
                <div>
                    <p class="mb-0">Mie Ayam JUMBO<br><small>(Original)</small></p>
                </div>
                <div>
                    <span class="small">x1</span>
                    <span class="fw-semibold text-danger">Rp. 27.000</span>
                </div>
            </div>

            <!-- Opsi Pengiriman -->
            <h6 class="fw-semibold mb-3">Opsi Pengiriman</h6>
            <div class="d-flex align-items-center mb-3 p-2" style="background-color: #f9f9f9; border-radius: 10px;">
            <div class="position-relative">
              <img src="{{ asset('img/svg/truck.svg') }}" width="60" alt="Diantar ke Lokasi">
              <i class="bi bi-check-circle-fill check-icon text-success position-absolute top-0 end-0" style="display: none;"></i>
            </div>
                <div>
                    <p class="mb-0 fw-semibold">Diantar Ke Lokasi</p>
                </div>
            </div>

            <!-- Total Pesanan -->
            <div class="d-flex justify-content-between mb-2">
                <span>Total Pesanan (3 Produk)</span>
                <span class="fw-semibold text-danger">Rp. 67.000</span>
            </div>

            <!-- Metode Pembayaran -->
            <div class="d-flex align-items-center mb-3 mt-3">
                <i class="fas fa-credit-card me-2"></i>
                <span>Metode Pembayaran</span>
                <span class="ms-auto fw-semibold">TUNAI</span>
            </div>

            <!-- Total Pembayaran -->
            <div class="d-flex justify-content-between mb-4">
                <span>Total Pembayaran</span>
                <span class="fw-semibold text-danger">Rp. 67.000</span>
            </div>

            <!-- Button -->
            <button class="btn w-100 fw-semibold text-white" style="background-color: #7a0000; border-radius: 8px;">
                Buat Pesanan
            </button>
        </div>
    </div>
</div>

