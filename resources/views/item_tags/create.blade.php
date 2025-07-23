<h1>Tambah Item Tag</h1>
<form action="{{ route('item-tags.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="name">
    <button type="submit">Simpan</button>
</form> 