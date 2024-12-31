@extends('layout')

@section('title', 'URL Shortener')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Encurtar a URL</h1>
    <form method="POST" action="{{ route('url.shorten') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="long_url" class="block text-gray-700 text-sm font-bold mb-2">Coloque a URL:</label>
            <input type="url" id="long_url" name="long_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="https://example.com" required>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Encurte a URL</button>
        </div>
    </form>
@endsection
