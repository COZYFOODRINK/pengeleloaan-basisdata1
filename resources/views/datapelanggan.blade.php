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
    <!-- <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary  fw-bold justify-content-center">
        <a class="navbar-brand text-white" >Data Pelanggan  </a>
        </nav>
    </div> -->

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
                        <a class="nav-link active" href="/inputdata">
                            Isi Data Pelanggan
                        </a>
                    </li>
            </div>
        </div>
</nav>

    @if (session ('sukses'))
    <script>
        Swal.fire({
        title: "{{ session('sukses') }}",
        icon: "success",
        draggable: true
        });
    </script>
    @elseif (session ('error'))
    <script>
        Swal.fire({
        title: "{{ session('error') }}",
        icon: "error",
        draggable: true
        });
    </script>
    @endif

    <div class="container mt-4">
        <table class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $pe)
                        <tr>
                            <td>{{ $pe->NamaPelanggan }}</td>
                            <td>{{ $pe->Alamat }}</td>
                            <td>{{ $pe->NomorTelepon }}</td>
                            <td class="text-center">
                                <a href="{{ route('form_update', $pe->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('delete', $pe->id) }}" class="btn btn-sm btn-danger">Hapus</a>

                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</html>
</table>