<h1>Edit Admin</h1>
<form action="{{ route('admins.update', $admin) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="name" value="{{ $admin->name }}">
    <button type="submit">Update</button>
</form> 