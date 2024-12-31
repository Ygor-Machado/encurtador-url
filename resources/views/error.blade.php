@extends('layout')

@section('title', 'Erro')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Erro</h1>
    <p class="text-red-500 mb-4">{{ $message }}</p>
    <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volte à página principal</a>
@endsection
