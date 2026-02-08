<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap-5.3.8/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand fw-bold ">
                Pengelolaan Basis Data
            </a>

            <!-- Toggle (HP) -->
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            Kembali Ke Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/dataproduk">
                            Lihat Data Produk
                        </a>
                    </li>
            </div>
        </div>
</nav>

    <form action="{{ route('insert.produk') }}" method="post">
     @csrf

    @if (session ('sukses'))
        <script>
            Swal.fire({
            title: "{{ session('sukses') }}",
            icon: "success",
            draggable: true
            });
        </script>
    @elseif (session ('gagal'))
        <script>
            Swal.fire({
            title: "{{ session('gagal') }}",
            icon: "error",
            draggable: true
            });
        </script>
    @endif
    
     <!-- @if(session('sukses'))
         <div style="color: green;">{{ session('sukses') }}</div>
     @endif

     @if(session('gagal'))
         <div style="color: red;">{{ session('gagal') }}</div> -->
     <!-- @endif -->
     
        <div class="container mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Form Data Produk</h5>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="NamaProduk" id="" placeholder="Masukkan nama produk">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="Harga" id="" placeholder="Masukkan harga produk">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="text" class="form-control" name="Stok" id="" placeholder="Masukkan stok produk">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                            <a href="/" class="btn btn-secondary">
                            Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- <input type="text" name="NamaProduk" id="" placeholder="Masukan nama produk">
    <br><br>
    <input type="text" name="Harga" id="" placeholder="Masukan Harga produk">
    <br><br>    
    <input type="text" name="Stok" id="" placeholder="Masukan stok">
    <br><br>
    <button type="submit">Submit</button> -->
    </form>
<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

