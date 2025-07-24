@extends('layouts.admin')

@section('title', 'Items')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold">Items</h2>
    <a href="{{ route('items.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tambah Item</a>
     <a href="{{ route('items.lowstock') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Laporan Stok Rendah</a>
</div>
<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($items as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->name ?? '-' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->stock ?? '-' }}</td>
                <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                    <a href="{{ route('items.show', $item) }}" class="text-blue-600 hover:underline">Lihat</a>
                    <a href="{{ route('items.edit', $item) }}" class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin hapus?');">
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