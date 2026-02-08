<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
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
            </div>
        </div>
</nav>

    <form action="{{ route('insert') }}" method="post">
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
         <div style="color: red;">{{ session('gagal') }}</div>
     @endif -->

    <!-- <div class="form-group mt-3 mb-2">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="" name="NamaPelanggan" required>
    </div>
            
    <div class="form-group">
        <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="NomorTelepon" name="NomorTelepon" required>
    </div> -->

        <div class="container mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Form Data Pelanggan</h5>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="NamaPelanggan" id="" placeholder="Masukkan nama">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" rows="3" name="Alamat" id="" placeholder="Masukkan alamat"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="NomorTelepon" id="" placeholder="08xxxxxxxxxx">
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
    </form>

    <!-- <input type="text" name="NamaPelanggan" id="" placeholder="Masukan nama anda">
    <br><br>
    <textarea name="Alamat" id="" cols="50" rows="5" placeholder="Masukan Alamat"></textarea>
    <br><br>    
    <input type="text" name="NomorTelepon" id="" placeholder="Masukan nomor telepon anda">
    <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->

<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

