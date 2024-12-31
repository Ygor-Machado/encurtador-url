@extends('layout')

@section('title', 'URL Encurtada')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">URL Encurtada</h1>
    <p class="mb-4">Original URL: <a href="{{ $long_url }}" target="_blank" class="text-blue-500 underline">{{ $long_url }}</a></p>
    <p class="mb-4">Shortened URL: <a href="{{ $short_url }}" target="_blank" class="text-green-500 underline">{{ $short_url }}</a></p>
    <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Encurte outra URL</a>
@endsection
