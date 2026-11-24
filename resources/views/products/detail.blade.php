<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h4>Detail Produk</h4>
        <hr>
        <div class="card">
            <div class="card-header">Informasi Produk</div>
            <div class="card-body">
                <p><strong>Nama Produk:</strong> {{ $product->nama_produk }}</p>
                <p><strong>Stok:</strong> {{ $product->stok }}</p>
                <p><strong>Harga:</strong> Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                <p><strong>Deskripsi:</strong> {{ $product->deskripsi ?? '-' }}</p>
                <a href="/product" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>