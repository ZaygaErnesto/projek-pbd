<h1>Detail Stock In</h1>
<p>ID: {{ $in->id }}</p>
<p>Item ID: {{ $in->item_id }}</p>
<p>Jumlah: {{ $in->quantity }}</p>
<a href="{{ route('stock-in.index') }}">Kembali</a> 