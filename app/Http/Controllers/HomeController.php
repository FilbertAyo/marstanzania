<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        // Base URL from config (services.php)
        $baseUrl = Config::get('services.catalogue_api.base_url', 'https://portal.marscommltd.com');
        $timeoutSeconds = (int) Config::get('services.catalogue_api.timeout', 10);

        // Call the API endpoint
        $response = Http::timeout($timeoutSeconds)->get($baseUrl . '/api/website/home');

        // Default empty
        $hero = [
            'hero_title' => 'Transform Your Home with the Latest in Electronics',
            'hero_text'  => 'Bringing the world’s best electronics to your home. Discover quality, reliability, and unbeatable service with Mars Communications Limited.',
            'hero_image' => 'assets/img/hero12.png',
            'intro_image' => 'assets/img/intro-video.jpg',
            'about_image' => 'assets/img/about.jpeg',
        ];

        if ($response->successful()) {
            $data = $response->json();
            if (isset($data['hero_title'])) {
                $hero = $data;
            }
        }

        // 2. Pull services
        $servicesResponse = Http::timeout($timeoutSeconds)->get($baseUrl . '/api/website/services');
        $services = $servicesResponse->successful() ? $servicesResponse->json() : [];

        $partnersResponse = Http::timeout($timeoutSeconds)->get($baseUrl . '/api/website/partners');
        $partners = $partnersResponse->successful() ? $partnersResponse->json() : [];

        $faqsResponse = Http::timeout($timeoutSeconds)->get($baseUrl . '/api/website/faqs');
        $faqs = $faqsResponse->successful() ? $faqsResponse->json() : [];
        // Pass to Blade
        return view("welcome", compact('hero', 'services', 'partners', 'faqs'));
    }
}
