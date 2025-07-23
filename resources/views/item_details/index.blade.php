<h1>Item Details</h1>
<a href="{{ route('item-details.create') }}">Tambah Item Detail</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach($item_details as $item_detail)
    <tr>
        <td>{{ $item_detail->id }}</td>
        <td>{{ $item_detail->name ?? '-' }}</td>
        <td>
            <a href="{{ route('item-details.show', $item_detail) }}">Lihat</a>
            <a href="{{ route('item-details.edit', $item_detail) }}">Edit</a>
            <form action="{{ route('item-details.destroy', $item_detail) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> 