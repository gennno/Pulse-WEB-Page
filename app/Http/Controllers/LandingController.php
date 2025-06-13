<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use jcobhams\NewsApi\NewsApi;
use Exception;

class LandingController extends Controller
{

public function index()
{
    $apiKey = env('NEWS_API_KEY'); // simpan API key di .env
    $baseUrl = 'https://newsapi.org/v2/top-headlines';

    $categories = ['technology', 'business', 'general'];
    $newsData = [];

    foreach ($categories as $category) {
        $response = Http::get($baseUrl, [
            'country' => 'us', // atau 'id' untuk Indonesia
            'category' => $category,
            'apiKey' => $apiKey,
            'pageSize' => 1
        ]);

        $newsData[$category] = $response->ok() && count($response['articles']) > 0
            ? (object) $response['articles'][0]
            : null;
    }

    return view('landing', [
        'tech' => $newsData['technology'],
        'business' => $newsData['business'],
        'general' => $newsData['general']
    ]);
}

}