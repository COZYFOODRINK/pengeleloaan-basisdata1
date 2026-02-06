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

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary  fw-bold justify-content-center">
        <a class="navbar-brand text-white" >Formulir Penjualan</a>
        </nav>
    </div>


    <!-- @if(session('sukses'))
         <div style="color: green;">{{ session('sukses') }}</div>
    @endif

    @if(session('error'))
         <div style="color: red;">{{ session('error') }}</div>
    @endif

    @if ($errors->any())
         <div style="color: red;">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
    @endif -->

    <form action="{{ route('insert.penjualan') }}" method="post">
    @csrf

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
        <div class="card">
            <div class="card-header text-center">
                <h5>Form Data Penjualan</h5>
            </div>

            <div class="card-body">
                <form>

                    <div class="mb-3">
                        <label for="pelanggan_id" >Pelanggan:</label>
                            <select class="form-select" name="pelanggan_id" id="pelanggan_id">
                            @foreach($pelanggan as $p)
                            <option value="{{ $p->id }}">{{ $p->NamaPelanggan }}</option>
                            @endforeach
                            </select>
                    </div>

                    <div class="mb-3">
                        <label for="produk_id">Produk:</label>
                        <select class="form-select" name="produk_id" id="produk_id">
                        @foreach($produk as $p)
                            <option value="{{ $p->id }}">{{ $p->NamaProduk }}</option>
                        @endforeach
                        </select>
                        </div>

                    <div class="mb-3">
                        <label class="form-label" for="Tanggal_Penjualan">Tanggal Penjualan</label>
                        <input type="date" class="form-control" name="Tanggal_Penjualan" id="Tanggal_Penjualan" value="{{ old('Tanggal_Penjualan') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="JumlahProduk">Jumlah Produk</label>
                        <input type="number" class="form-control" name="JumlahProduk" id="JumlahProduk" value="{{ old('JumlahProduk') }}">
                    </div>

                    <!-- <div class="mb-3">
                        <label class="form-label" for="TotalHarga">Total Harga</label>
                        <input type="text" class="form-control" name="TotalHarga" id="TotalHarga" value="{{ old('TotalHarga') }}">
                    </div> -->

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

    <!-- <div>
        <label for="Tanggal_Penjualan">Tanggal Penjualan:</label>
        <input type="date" name="Tanggal_Penjualan" id="Tanggal_Penjualan" value="{{ old('Tanggal_Penjualan') }}">
    </div>

    <div>
        <label for="JumlahProduk">Jumlah Produk:</label>
        <input type="number" name="JumlahProduk" id="JumlahProduk" value="{{ old('JumlahProduk') }}">
    </div>

    <div>
        <label for="TotalHarga">Total Harga:</label>
        <input type="number" name="TotalHarga" id="TotalHarga" value="{{ old('TotalHarga') }}">
    </div>

    <button type="submit">Submit</button> -->
    
    </form>
<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
