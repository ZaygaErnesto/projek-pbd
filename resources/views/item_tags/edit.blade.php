@extends('layouts.admin')

@section('title', 'Edit Item Tag')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Item Tag</h1>
    <form action="{{ route('item-tags.update', $item_tag) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" name="name" id="name" value="{{ $item_tag->name }}" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" required>
        </div>
        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 transition">Update</button>
    </form>
</div>
@endsection