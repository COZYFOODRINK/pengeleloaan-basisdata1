<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('bootstrap-5.3.8/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <!-- <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary  fw-bold justify-content-center">
        <a class="navbar-brand text-white" href="#">Pengelolaan Basis Data</a>
        </nav>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container justify-content-center">
        <!-- Brand -->
        <a class="navbar-brand fw-bold ">
            Pengelolaan Basis Data
        </a>

        <!-- Toggle (HP)
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <!-- Menu -->
        <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Penjualan
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

    <section class="py-5" id="fitur">
        <div class="container">
            <h2 class="text-center mb-5">Selamat Datang Di Aplikasi Pengelolaan Data</h2>
            <div class="row g-4">
                <!-- Pelanggan -->
              <div class="col-md-4">
                    <div class="card field-card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">Pelanggan</h5>
                            <p class="card-text">Berfungsi untuk mengelola data pelanggan.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="/inputdata" class="btn btn-primary w-100 mb-2">Isi Data Sekarang</a>
                            <a href="/datapelanggan" class="btn btn-secondary w-100">Lihat Data Pelanggan</a>    
                        </div>
                    </div>
                </div>
                
                <!-- Produk -->
              <div class="col-md-4">
                    <div class="card field-card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">Produk</h5>
                            <p class="card-text">Berfungsi untuk mengelola data produk.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="/input-produk" class="btn btn-primary w-100 mb-2">Isi Data Sekarang</a>
                             <a href="/dataproduk" class="btn btn-secondary w-100">Lihat Data Produk</a>  
                        </div>
                    </div>
                </div>
                
                <!-- Penjualan -->
              <div class="col-md-4">
                    <div class="card field-card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">Penjualan</h5>
                            <p class="card-text">Berfungsi untuk mengelola data penjualan.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="/input-penjualan" class="btn btn-primary w-100 mb-2">Isi Data Sekarang</a>
                            <a href="/datapenjualan" class="btn btn-secondary w-100">Lihat Data Penjualan</a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>