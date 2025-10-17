<x-header />

<div class="container my-5">
  <h4 class="fw-bold mb-4" style="color: #8C2C00;">Riwayat Pesanan</h4>

  <!-- FILTER SECTION -->
  <div class="p-4 rounded-3 mb-4" style="background-color: #B23B00; color: #fff;">
    <form action="{{ route('admin.riwayat-pesanan') }}" method="GET" class="row g-3 align-items-center">
      <div class="col-md-3">
        <label for="from_date" class="form-label">Tanggal Dari</label>
        <input type="date" id="from_date" name="from_date" class="form-control">
      </div>
      <div class="col-md-3">
        <label for="to_date" class="form-label">Sampai</label>
        <input type="date" id="to_date" name="to_date" class="form-control">
      </div>
      <div class="col-md-3 mt-4">
        <button type="submit" class="btn fw-bold" style="background-color: #6E1A00; color: #fff;">Cari</button>
      </div>
      <div class="col-md-3 mt-4 text-end">
        <a href="" class="btn fw-bold" style="background-color: #8C2C00; color: #fff; border: 1px solid #fff;">Unduh Laporan</a>
      </div>
    </form>
  </div>

  <!-- TABLE SECTION -->
  <div class="rounded-3 p-3" style="background-color: #8C2C00;">
    <div class="table-responsive">
      <table class="table table-bordered align-middle mb-0">
        <thead style="background-color: #5E0F00; color: #fff;">
          <tr class="text-center">
            <th>No</th>
            <th>Tanggal</th>
            <th>ID Pesanan</th>
            <th>Produk</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Metode Pengambilan</th>
            <th>Status Pembayaran</th>
          </tr>
        </thead>
        <tbody style="background-color: #fff;">
        </tbody>
      </table>
    </div>
  </div>
</div>
