@extends('layouts.admin')

@section('title', 'Tambah Stock Out')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Tambah Stock Out</h2>
    <form action="{{ route('stock-out.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Item ID:</label>
            <input type="text" name="item_id" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div>
            <label class="block mb-1 font-medium">Jumlah:</label>
            <input type="number" name="quantity" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
    </form>
</div>
@endsection 