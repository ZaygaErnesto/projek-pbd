<h1>Item Tag Pivot</h1>
<a href="{{ route('item-tag-pivot.create') }}">Tambah Item Tag Pivot</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Item ID</th>
        <th>Tag ID</th>
        <th>Aksi</th>
    </tr>
    @foreach($item_tag_pivot as $pivot)
    <tr>
        <td>{{ $pivot->id }}</td>
        <td>{{ $pivot->item_id ?? '-' }}</td>
        <td>{{ $pivot->item_tag_id ?? '-' }}</td>
        <td>
            <a href="{{ route('item-tag-pivot.show', $pivot) }}">Lihat</a>
            <a href="{{ route('item-tag-pivot.edit', $pivot) }}">Edit</a>
            <form action="{{ route('item-tag-pivot.destroy', $pivot) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> 