@extends('layouts.admin')

@section('title', 'Detail Stock Out')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Detail Stock Out</h2>
    <p class="mb-2"><span class="font-medium">ID:</span> {{ $out->id }}</p>
    <p class="mb-2"><span class="font-medium">Item ID:</span> {{ $out->item_id }}</p>
    <p class="mb-2"><span class="font-medium">Jumlah:</span> {{ $out->quantity }}</p>
    <a href="{{ route('stock-out.index') }}" class="inline-block mt-4 bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Kembali</a>
</div>
@endsection 