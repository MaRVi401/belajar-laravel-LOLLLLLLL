<h1>Eksperimen Jenis Array</h1>

<h3>1. Indexed Array (Ambil index ke-0)</h3>
<p>Hobi pertama saya adalah: <b>{{ $hobi[0] }}</b></p>

<hr>

<h3>2. Associative Array (Ambil Key 'nama')</h3>
<p>Halo, nama saya <b>{{ $profil['nama'] }}</b></p>

<hr>

<h3>3. Multidimensional Array (Looping laci di dalam lemari)</h3>
<ul>
    @foreach($produk as $p)
        <li>Barang: {{ $p['item'] }} - Harga: Rp{{ number_format($p['harga']) }}</li>
    @endforeach
</ul>

<p>Cara panggil langsung (Laci 1, Item): <b>{{ $produk[1]['item'] }}</b></p>