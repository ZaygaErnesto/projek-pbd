<h1>Admins</h1>
<a href="{{ route('admins.create') }}">Tambah Admin</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach($admins as $admin)
    <tr>
        <td>{{ $admin->id }}</td>
        <td>{{ $admin->name ?? '-' }}</td>
        <td>
            <a href="{{ route('admins.show', $admin) }}">Lihat</a>
            <a href="{{ route('admins.edit', $admin) }}">Edit</a>
            <form action="{{ route('admins.destroy', $admin) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> 