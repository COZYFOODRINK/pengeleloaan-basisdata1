<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap-5.3.8/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    
    
    <!-- <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary  fw-bold justify-content-center">
        <a class="navbar-brand text-white" >Data Penjualan</a>
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
                        <a class="nav-link active" href="/input-penjualan">
                            Isi Data Penjualan
                        </a>
                    </li>
            </div>
        </div>
</nav>

    <!-- @if (session ('sukses'))
    <p>{{ session('sukses') }}</p>
    @else (session ('error'))
    <p>{{ session('error') }}</p>
    @endif -->

    <div class="container mt-4">
        <table class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>ID Produk</th>
                        <th>Tanggal Penjualan</th>
                        <th>Jumlah Produk</th>
                        <th>Total Harga</th>
                        <th>Sub Total</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $pe)
                        <tr>
                            <td>{{ $pe->pelanggan->NamaPelanggan ?? 'N/A' }}</td>
                            <td>{{ $simpan->where('penjualan_id', $pe->id)->first()->produk->NamaProduk ?? 'N/A' }}</td>
                            <td >{{ $pe->Tanggal_Penjualan }}</td>
                            <td>{{ $simpan->where('penjualan_id', $pe->id)->first()->JumlahProduk ?? 'N/A' }}</td>
                            <td>{{ $pe->TotalHarga }}</td>
                            <td>{{ $simpan->where('penjualan_id', $pe->id)->first()->SubTotal ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

<!-- <table border="1">
    <thead>
        <tr>
            <th>ID Pelanggan</th>
            <th>ID Produk</th>
            <th>Tanggal Penjualan</th>
            <th>Jumlah Produk</th>
            <th>Total Harga</th>
            <th>Sub Total</th>
            <th>Aksi</th>
        </tr>
    </thead> -->
    <!-- <tbody>
        @foreach($data as $pe)
        <tr>
            <td>{{ $pe->pelanggan_id }}</td>
            <td>{{ $simpan->where('penjualan_id', $pe->id)->first()->produk_id ?? 'N/A' }}</td>
            <td>{{ $pe->Tanggal_Penjualan }}</td>
            <td>{{ $simpan->where('penjualan_id', $pe->id)->first()->JumlahProduk ?? 'N/A' }}</td>
            <td>{{ $pe->TotalHarga }}</td>
            <td>{{ $simpan->where('penjualan_id', $pe->id)->first()->SubTotal ?? 'N/A' }}</td>
             <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
        </td> -->
        <!-- </tr> -->
        <!-- @endforeach --> 
</table>