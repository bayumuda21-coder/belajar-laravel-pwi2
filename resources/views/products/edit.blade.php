<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark" style="background-color: #0875ff;">
        <div class="container">
            <a class="navbar-brand" href="/products">Belajar Laravel 12</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>Edit Produk</h4>
        <hr>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk"
                       class="form-control"
                       value="{{ old('nama_produk', $product->nama_produk) }}"
                       required>
                @error('nama_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok"
                       class="form-control"
                       value="{{ old('stok', $product->stok) }}"
                       min="0" required>
                @error('stok')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga"
                       class="form-control"
                       value="{{ old('harga', $product->harga) }}"
                       min="0" step="0.01" required>
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="{{ route('products.index') }}"
               class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>
</html>