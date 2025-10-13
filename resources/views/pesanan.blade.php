@include ('components.header')
<div class="container my-4">
    <h5 class="fw-bold mb-3">Status Pesanan</h5>

    <!-- Tabs -->
    <ul class="nav nav-tabs border-0 mb-3" id="orderTabs">
        <li class="nav-item">
            <a class="nav-link active fw-semibold text-warning" data-bs-toggle="tab" href="#proses">Sedang Diproses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-semibold text-dark" data-bs-toggle="tab" href="#selesai">Pesanan Selesai</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-semibold text-dark" data-bs-toggle="tab" href="#riwayat">Riwayat Pesanan</a>
        </li>
    </ul>

    <!-- Tab Contents -->
    <div class="tab-content bg-white p-3 rounded shadow-sm">

        <!-- Sedang Diproses -->
        <div class="tab-pane fade show active" id="proses">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="text-muted">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Metode Pengambilan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('images/mieayam.jpg') }}" width="70" class="rounded"></td>
                            <td><strong>Mie Ayam Komplit</strong></td>
                            <td>2</td>
                            <td>40.000</td>
                            <td><em>Diantar ke lokasi</em></td>
                            <td><span class="text-success fw-semibold">Diproses</span></td>
                            <td><button class="btn btn-success btn-sm rounded-pill">Diterima</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pesanan Selesai -->
        <div class="tab-pane fade" id="selesai">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="text-muted">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Metode Pengambilan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('images/nasigoreng.jpg') }}" width="70" class="rounded"></td>
                            <td><strong>Nasi Goreng Spesial</strong></td>
                            <td>1</td>
                            <td>25.000</td>
                            <td><em>Ambil sendiri</em></td>
                            <td><span class="text-primary fw-semibold">Selesai</span></td>
                            <td><button class="btn btn-outline-primary btn-sm rounded-pill">Ulas</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Riwayat Pesanan -->
        <div class="tab-pane fade" id="riwayat">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="text-muted">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('images/sate.jpg') }}" width="70" class="rounded"></td>
                            <td><strong>Sate Ayam</strong></td>
                            <td>3</td>
                            <td>60.000</td>
                            <td>10 Oktober 2025</td>
                            <td><span class="text-secondary fw-semibold">Selesai</span></td>
                            <td><button class="btn btn-outline-secondary btn-sm rounded-pill">Pesan Lagi</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

