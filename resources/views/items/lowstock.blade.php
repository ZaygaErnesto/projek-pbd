@extends('layouts.admin')
@section('title', 'Laporan Stok Rendah')
@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-red-700">Laporan Stok Rendah</h2>
    <p class="text-gray-600">Daftar barang yang stoknya menipis dan perlu segera re-order.</p>
</div>
@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif
<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-red-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-bold text-red-700 uppercase">ID Item</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-red-700 uppercase">Nama Item</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-red-700 uppercase">Stok Saat Ini</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-red-700 uppercase">Catatan</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($lowStocks as $item)
            <tr>
                <td class="px-6 py-4">{{ $item->id_item }}</td>
                <td class="px-6 py-4">{{ $item->nama_item }}</td>
                <td class="px-6 py-4 text-center font-semibold text-red-600">{{ $item->stok_saat_ini }}</td>
                <td class="px-6 py-4">{{ $item->catatan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data stok rendah.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection