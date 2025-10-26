<!-- <div>
    Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant
</div> -->

<x-header/>

<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #a04c00;">
    <div class="card shadow border-0" style="width: 420px; border-radius: 15px;">
        <form action="{{ route('order.store') }}" method="POST" class="mb-4">
            @csrf
                <div class="card-body" style="background-color: #fff; border-radius: 15px;">
                    <h5 class="fw-bold mb-3">Rincian Harga</h5>
                    <? //var_dump($cart)?>
                    <h6 class="fw-semibold mb-3">Total Pesanan</h6>

                    @php
                        $total = 0;
                    @endphp

                    @foreach ($cart as $item)
                        @php
                            $subtotal = $item['price'] * $item['quantity'];
                            $total += $subtotal;
                        @endphp
                        <div class="mb-3 d-flex justify-content-between">
                            <div>
                                <p class="mb-0">{{ $item['name'] }}<br>
                                    <small>
                                        @foreach ($item['variants'] as $variant => $value)
                                            @if ($value > 0)
                                                {{ $variant }} ({{ $value }})@if (!$loop->last), @endif
                                            @endif
                                        @endforeach
                                    </small>
                                </p>
                            </div>
                            <div>
                                <span class="small">x{{ $item['quantity'] }}</span>
                                <span class="fw-semibold text-danger">Rp. {{ number_format($subtotal, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    @endforeach

                    <hr>

                    <!-- Select Pickup Method -->
                    <h6 class="fw-semibold mb-3">Metode Pengambilan</h6>
                    <div class="mb-3">
                      <select name="metode_pengambilan" id="pickupMethod" class="form-select readonly-select">
                          <option value="gerai" {{ session('pickup_method') === 'gerai' ? 'selected' : '' }}>Ambil di Gerai</option>
                          <option value="antar" {{ session('pickup_method') === 'antar' ? 'selected' : '' }}>Diantar ke Lokasi</option>
                        </select>
                    </div>

                    <!-- Payment Method -->
                 <h6 class="fw-semibold mb-3">Jenis Pembayaran</h6>
                <div class="mb-3">
                    <select name="jenis_pembayaran" id="paymentMethod" class="form-select">
                        <option value="qris" selected>QRIS</option>
                    </select>
                </div>

                <!-- Transfer Info (hidden by default) -->
                <div id="qrisInfo" class="text-center mb-3">
                    <p class="fw-semibold mb-2">Scan QRIS di bawah ini untuk pembayaran:</p>
                    <img src="{{ asset('img/qr.jpg') }}" alt="QRIS Payment" class="img-fluid rounded shadow" style="max-width: 200px;">
                    <p class="text-muted mt-2 mb-0"><small>Pastikan nama penerima sesuai dengan <b>MIESABI KEBON JERUK</b></small></p>
                </div>



                    <div class="d-flex justify-content-between mb-2">
                      <span>Subtotal ({{ count($cart) }} Produk)</span>
                      <span class="fw-semibold text-danger">Rp. {{ number_format($total, 0, ',', '.') }}</span>
                    </div>

                    @php
                        $pickupMethod = session('pickup_method', 'gerai');
                        $ongkir = $pickupMethod === 'antar' ? 10000 : 0;
                        $finalTotal = $total + $ongkir;
                    @endphp

                    <div class="d-flex justify-content-between mb-2">
                      <span>Ongkos Kirim 
                        <small class="text-muted">
                            ({{ $pickupMethod === 'antar' ? 'Diantar ke Lokasi' : 'Ambil di Gerai' }})
                        </small>
                      </span>
                      <span class="fw-semibold text-danger">Rp. {{ number_format($ongkir, 0, ',', '.') }}</span>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <span>Total Pembayaran</span>
                      <span class="fw-semibold text-danger">Rp. {{ number_format($finalTotal, 0, ',', '.') }}</span>
                    </div>

                    <button type="submit" class="btn w-100 fw-semibold text-white" style="background-color: #7a0000; border-radius: 8px;">
                        Buat Pesanan
                    </button>
                </div>
        </form>
    </div>
</div>

<!-- JS Logic -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const pickupMethod = document.getElementById('pickupMethod');
    const shippingDisplay = document.getElementById('shippingCost');
    const finalTotal = document.getElementById('finalTotal');
    const subtotalDisplay = document.getElementById('subtotalDisplay');

    const subtotal = {{$total}};
    let shipping = 0;

    function updateTotal() {
        const total = subtotal + shipping;
        shippingDisplay.textContent = "Rp. " + new Intl.NumberFormat('id-ID').format(shipping);
        finalTotal.textContent = "Rp. " + new Intl.NumberFormat('id-ID').format(total);
    }

    pickupMethod.addEventListener('change', function () {
        if (pickupMethod.value === 'antar') {
            shipping = 10000;
        } else {
            shipping = 0;
        }
        updateTotal();
    });

     paymentMethod.addEventListener('change', function () {
        if (paymentMethod.value === 'QRIS') {
            qrisInfo.style.display = 'blocked';
        } else {
            qrisInfo.style.display = 'none';
        }
    });
});
</script>
