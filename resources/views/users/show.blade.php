@extends('layouts.admin')

@section('title', 'Detail User')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Detail User</h2>
    <p class="mb-2"><span class="font-medium">ID:</span> {{ $user->id }}</p>
    <p class="mb-2"><span class="font-medium">Nama:</span> {{ $user->name }}</p>
    <p class="mb-2"><span class="font-medium">Email:</span> {{ $user->email }}</p>
    <a href="{{ route('users.index') }}" class="inline-block mt-4 bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Kembali</a>
</div>
@endsection 