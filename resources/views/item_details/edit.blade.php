<h1>Edit Item Detail</h1>
<form action="{{ route('item-details.update', $item_detail) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="name" value="{{ $item_detail->name }}">
    <button type="submit">Update</button>
</form> 