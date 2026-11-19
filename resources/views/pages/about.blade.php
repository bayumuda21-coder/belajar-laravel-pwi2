```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3168f5;">
        <div class="container">
            <a class="navbar-brand" href="/">Belajar Laravel 12</a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">Beranda</a>
                <a class="nav-link active" href="/about">Tentang Kami</a>
                <a class="nav-link" href="/contact">Kontak</a>
                <a class="nav-link" href="#">Produk Kami</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>Selamat datang!!</h4>

        <h5>
            Perkenalkan saya {{ $nama }}, dari kelas {{ $kelas }}
            dengan nim {{ $nim }}
        </h5>
    </div>

</body>
</html>
```