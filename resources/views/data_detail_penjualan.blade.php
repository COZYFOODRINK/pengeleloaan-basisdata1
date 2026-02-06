<!-- @if (session ('sukses'))
    <p>{{ session('sukses') }}</p>
@else (session ('error'))
    <p>{{ session('error') }}</p>
@endif -->

<!-- <table border="1">
    <thead>
        <tr>
            <th>ID Penjualan</th>
            <th>ID Produk</th>
            <th>Jumlah Produk</th>
            <th>Sub Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $pe)
        <tr>
            <td>{{ $pe->penjualan_id }}</td>
            <td>{{ $pe->produk_id }}</td>
            <td>{{ $pe->JumlahProduk }}</td>
            <td>{{ $pe->SubTotal }}</td>
            <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
        </td> 
        </tr>
        @endforeach
</table> -->