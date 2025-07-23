<h1>Edit Item Tag Pivot</h1>
<form action="{{ route('item-tag-pivot.update', $pivot) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Item ID:</label>
    <input type="text" name="item_id" value="{{ $pivot->item_id }}">
    <label>Tag ID:</label>
    <input type="text" name="item_tag_id" value="{{ $pivot->item_tag_id }}">
    <button type="submit">Update</button>
</form> 