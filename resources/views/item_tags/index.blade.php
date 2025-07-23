<h1>Item Tags</h1>
<a href="{{ route('item-tags.create') }}">Tambah Item Tag</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach($item_tags as $item_tag)
    <tr>
        <td>{{ $item_tag->id }}</td>
        <td>{{ $item_tag->name ?? '-' }}</td>
        <td>
            <a href="{{ route('item-tags.show', $item_tag) }}">Lihat</a>
            <a href="{{ route('item-tags.edit', $item_tag) }}">Edit</a>
            <form action="{{ route('item-tags.destroy', $item_tag) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> 