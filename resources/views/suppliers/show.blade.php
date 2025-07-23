@extends('layouts.admin')

@section('title', 'Detail Supplier')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Detail Supplier</h2>
    <p class="mb-2"><span class="font-medium">ID:</span> {{ $supplier->id }}</p>
    <p class="mb-2"><span class="font-medium">Nama:</span> {{ $supplier->name }}</p>
    <a href="{{ route('suppliers.index') }}" class="inline-block mt-4 bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Kembali</a>
</div>
@endsection 