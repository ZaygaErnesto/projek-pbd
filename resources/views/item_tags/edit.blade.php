<h1>Edit Item Tag</h1>
<form action="{{ route('item-tags.update', $item_tag) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="name" value="{{ $item_tag->name }}">
    <button type="submit">Update</button>
</form> 