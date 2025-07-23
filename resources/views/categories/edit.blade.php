<h1>Edit Category</h1>
<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="name" value="{{ $category->name }}">
    <button type="submit">Update</button>
</form> 