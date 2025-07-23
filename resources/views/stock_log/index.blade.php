@extends('layouts.admin')

@section('title', 'Stock Log')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold">Stock Log</h2>
    <a href="{{ route('stock-log.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tambah Stock Log</a>
</div>
<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($stock_log as $log)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $log->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $log->item_id ?? '-' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $log->quantity ?? '-' }}</td>
                <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                    <a href="{{ route('stock-log.show', $log) }}" class="text-blue-600 hover:underline">Lihat</a>
                    <a href="{{ route('stock-log.edit', $log) }}" class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('stock-log.destroy', $log) }}" method="POST" onsubmit="return confirm('Yakin hapus?');">
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