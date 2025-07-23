@extends('layouts.admin')

@section('title', 'Edit Stock Log')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Edit Stock Log</h2>
    <form action="{{ route('stock-log.update', $log) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1 font-medium">Item ID:</label>
            <input type="text" name="item_id" value="{{ $log->item_id }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <div>
            <label class="block mb-1 font-medium">Jumlah:</label>
            <input type="number" name="quantity" value="{{ $log->quantity }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 transition">Update</button>
    </form>
</div>
@endsection 