<h1>Katalog Toko</h1>
<ul>
    @foreach($daftarProduk as $p)
        <li>{{ $p['nama'] }} - Rp{{ number_format($p['harga']) }}</li>
    @endforeach
</ul>