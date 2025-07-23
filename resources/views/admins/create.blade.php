<h1>Tambah Admin</h1>
<form action="{{ route('admins.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="name">
    <button type="submit">Simpan</button>
</form> 