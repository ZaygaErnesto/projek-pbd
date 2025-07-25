@extends('layouts.admin')

@section('title', 'Item Tags')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold">Item Tags</h1>
    <a href="{{ route('item-tags.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tambah Item Tag</a>
</div>
<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($item_tags as $item_tag)
            <tr>
                <td class="px-6 py-4">{{ $item_tag->id }}</td>
                <td class="px-6 py-4">{{ $item_tag->tag_name }}</td>
                <td class="px-6 py-4 flex gap-2">
                    <a href="{{ route('item-tags.show', $item_tag) }}" class="text-blue-600 hover:underline">Lihat</a>
                    <a href="{{ route('item-tags.edit', $item_tag) }}" class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('item-tags.destroy', $item_tag) }}" method="POST" onsubmit="return confirm('Yakin hapus?');" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection