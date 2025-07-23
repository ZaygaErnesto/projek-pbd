@extends('layouts.admin')

@section('title', 'Edit Item')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Edit Item</h2>
    <form action="{{ route('items.update', $item) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1 font-medium">Nama:</label>
            <input type="text" name="name" value="{{ $item->name }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>
        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 transition">Update</button>
    </form>
</div>
@endsection 