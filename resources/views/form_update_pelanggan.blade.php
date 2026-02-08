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
        <a class="navbar-brand text-white" >Formulir Update Pelanggan</a>
        </nav>
    </div>

    <form action="{{ route('update', ['id' => $data->id]) }}" method="post">
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

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h5>Form Data Pelanggan</h5>
            </div>

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="NamaPelanggan" id="" placeholder="Masukkan nama" value="{{ $data->NamaPelanggan }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" rows="3" name="Alamat" id="" placeholder="Masukkan alamat">{{ $data->Alamat }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="NomorTelepon" id="" placeholder="08xxxxxxxxxx" value="{{ $data->NomorTelepon }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Update Data
                        </button>
                        <a href="/datapelanggan" class="btn btn-secondary">
                            Batal
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


     
    <!-- <input type="text" name="NamaPelanggan" id="" placeholder="Masukan nama anda" value="{{ $data->NamaPelanggan }}">
    <br><br>
    <textarea name="Alamat" id="" cols="50" rows="5" placeholder="Masukan Alamat">{{ $data->Alamat }}</textarea>
    <br><br>    
    <input type="text" name="NomorTelepon" id="" placeholder="Masukan nomor telepon anda" value="{{ $data->NomorTelepon }}">
    <br><br>
    <button type="submit">Submit</button> -->
</form>
<script src="{{ asset('bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

