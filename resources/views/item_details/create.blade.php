<h1>Tambah Item Detail</h1>
<form action="{{ route('item-details.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="name">
    <button type="submit">Simpan</button>
</form> 