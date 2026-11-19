
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            font-size: 14px;
        }

        .navbar {
            background-color: #0875ff;
        }

        footer {
            background-color: #00eeee;
            text-align: center;
            padding: 8px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/products">
                Belajar Laravel 12
            </a>

            <div>
                <a href="/" class="text-white text-decoration-none me-3">
                    Beranda
                </a>

                <a href="/products" class="text-white text-decoration-none">
                    Produk Kami
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>Daftar produk kami</h4>
        <hr>

        <a href="{{ route('products.create') }}"
           class="btn btn-primary btn-sm mb-3">
            Tambah Data
        </a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                Produk Kami
            </div>

            <div class="card-body p-2">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $product->nama_produk }}</td>

                                    <td>{{ $product->stok }}</td>

                                    <td>
                                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                                    </td>

                                    <td>{{ $product->deskripsi ?? '-' }}</td>

                                    <td>
                                        <a href="{{ route('products.edit', $product) }}"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('products.destroy', $product) }}"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Belum ada data produk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Copyright 2026
    </footer>

</body>
</html>
