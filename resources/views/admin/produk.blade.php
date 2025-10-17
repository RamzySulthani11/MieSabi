<x-header/>
<div class="container mt-5">
    <div class="card border-0 shadow-sm" style="background-color: #6e1000;">
        <div class="card-body" style="background-color: #8c2c00; color: #f6c23e;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold">Kelola Produk</h5>
                <a href="#" class="btn btn-sm text-white" style="background-color:#5a0000;" data-bs-toggle="modal" data-bs-target="#addProductModal">Tambah Produk</a>
            </div>

            <table class="table align-middle table-borderless text-light">
                <thead style="background-color:#5a0000; color:#f6c23e;">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Varian</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr class="bg-white text-dark">
                        <td>
                            <img src="{{ asset('img/menu/' . $product->code_product . '.png') }}" alt="{{ $product['name'] }}" class="img-thumbnail" style="width:80px; height:80px; object-fit:cover;">
                        </td>
                        <td>
                            <span class="fw-semibold">{{ $product['name'] }}</span>
                        </td>
                        <td>
                            <span class="badge" style="background-color:#8c0000; color:white;">{{ $product['variant'] }}</span>
                        </td>
                        <td> {{ number_format($product['price'], 0, ',', '.') }} </td>
                        <td><i>{{ $product['stock'] }} Porsi</i></td>
                        <td>
                            <form action="{{ route('products.destroy', $product['id']) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger fw-semibold p-0 m-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-light">No products available</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ================== ADD PRODUCT MODAL ================== -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0" style="background-color: #8c2c00; color: #f6c23e;">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="addProductModalLabel">Tambah Produk</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="addProductForm" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="productName" class="form-label text-light">Product Name</label>
            <input type="text" class="form-control border-0" id="productName" placeholder="Masukkan nama produk" required>
          </div>

          <h6 class="fw-bold mt-4">Categories</h6>
          <div id="categoryContainer">
            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label text-light">Varian</label>
                <input type="text" class="form-control border-0" name="variant[]" placeholder="Varian">
              </div>
              <div class="col-md-4">
                <label class="form-label text-light">Price</label>
                <input type="number" class="form-control border-0" name="price[]" placeholder="Rp.">
              </div>
              <div class="col-md-4">
                <label class="form-label text-light">Stock</label>
                <input type="number" class="form-control border-0" name="stock[]" placeholder="Stock">
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-sm text-white mb-4" style="background-color:#5a0000;" id="addCategoryBtn">Add Category</button>

          <div class="mb-3">
            <label for="productImage" class="form-label text-light">Product Image</label>
            <input class="form-control border-0" type="file" id="productImage" accept=".jpg,.jpeg,.png,.gif,.svg">
            <small class="text-warning">Hanya file gambar (JPG, JPEG, PNG, GIF, SVG). Maksimal ukuran 2MB.</small>
          </div>
        </form>
      </div>

      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn text-white" style="background-color:#5a0000;" form="addProductForm">Tambah Produk</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('addCategoryBtn').addEventListener('click', function () {
  const container = document.getElementById('categoryContainer');
  const newRow = document.createElement('div');
  newRow.classList.add('row', 'mb-3');
  newRow.innerHTML = `
    <div class="col-md-4">
      <input type="text" class="form-control border-0" name="variant[]" placeholder="Varian">
    </div>
    <div class="col-md-4">
      <input type="number" class="form-control border-0" name="price[]" placeholder="Rp.">
    </div>
    <div class="col-md-4">
      <input type="number" class="form-control border-0" name="stock[]" placeholder="Stock">
    </div>
  `;
  container.appendChild(newRow);
});
</script>
