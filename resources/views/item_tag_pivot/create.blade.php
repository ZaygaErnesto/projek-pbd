<h1>Tambah Item Tag Pivot</h1>
<form action="{{ route('item-tag-pivot.store') }}" method="POST">
    @csrf
    <label>Item ID:</label>
    <input type="text" name="item_id">
    <label>Tag ID:</label>
    <input type="text" name="item_tag_id">
    <button type="submit">Simpan</button>
</form> 