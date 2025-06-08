<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function index()
{
    $apiKey = 'pub_21bebb5ba2b245728651bb555dca8078'; // replace with your NewsData.io key
    $categories = ['technology', 'business', 'education'];
    $news = [];

    foreach ($categories as $category) {
        $response = Http::get('https://newsdata.io/api/1/latest', [
            'apikey' => $apiKey,
            'country' => 'sg',
            'category' => $category,
            'language' => 'en',
        ]);

        if ($response->successful()) {
            $data = $response->json();

            if (!empty($data['results'])) {
                $firstArticle = $data['results'][0];
                $news[$category] = [
                    'title'       => $firstArticle['title'] ?? 'No Title',
                    'description' => $firstArticle['description'] ?? 'No Description',
                    'url'         => $firstArticle['link'] ?? '#',
                    'urlToImage'  => $firstArticle['image_url'] ?? null,
                    'publishedAt' => $firstArticle['pubDate'] ?? now(),
                ];
            } else {
                \Log::warning("No articles returned for category: $category");
                $news[$category] = null;
            }
        } else {
            \Log::error("News API failed for $category: " . $response->body());
            $news[$category] = null;
        }
    }

    return view('landing', [
        'tech'      => $news['technology'],
        'business'  => $news['business'],
        'education' => $news['education'],
    ]);
}
}

