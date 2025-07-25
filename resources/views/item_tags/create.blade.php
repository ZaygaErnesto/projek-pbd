@extends('layouts.admin')

@section('title', 'Tambah Item Tag')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Tambah Item Tag</h1>
    <form action="{{ route('item-tags.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="tag_name" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" name="tag_name" id="tag_name" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
    </form>
</div>
@endsection