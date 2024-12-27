<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate(['long_url' => 'required|url']);

        $shortUrl = Str::random(6);

        $url = Url::create([
            'long_url' => $request->long_url,
            'short_url' => $shortUrl
        ]);

        return view('shorten', [
            'short_url' => url($shortUrl),
            'long_url' => $url->long_url
        ]);
    }
    public function redirect($url)
    {
        $url = Url::where('short_url', $url)->first();

        if (!$url) {
            return view('error', [
                'message' => 'URL não encontrada',
            ]);
        }

        return redirect($url->long_url);
    }

}
