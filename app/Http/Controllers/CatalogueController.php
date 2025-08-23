<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class CatalogueController extends Controller
{
    public function index(): ViewContract
    {
        $catalogues = $this->fetchCatalogues();
        return view('catalogues', [
            'catalogues' => $catalogues,
        ]);
    }

    private function fetchCatalogues(): array
    {
        $baseUrl = Config::get('services.catalogue_api.base_url', 'https://portal.marscommltd.com');
        $timeoutSeconds = (int) Config::get('services.catalogue_api.timeout', 10);

        // Assume default Laravel api.php prefix
        $endpoint = rtrim($baseUrl, '/') . '/api/catalogues';

        $response = Http::timeout($timeoutSeconds)
            ->acceptJson()
            ->get($endpoint);

        if (!$response->ok()) {
            return [];
        }

        $payload = $response->json();
        $items = [];
        if (is_array($payload)) {
            $items = $payload['data'] ?? $payload;
            if (!is_array($items)) {
                $items = [];
            }
        }

        $normalized = [];
        foreach ($items as $item) {
            if (!is_array($item)) {
                continue;
            }
            $normalized[] = $this->normalizeCatalogue($item, $baseUrl);
        }

        return $normalized;
    }

    /**
     * Ensure logo and file URLs are absolute.
     */
    private function normalizeCatalogue(array $catalogue, string $baseUrl): array
    {
        $base = rtrim($baseUrl, '/');

        $logo = $catalogue['logo'] ?? null;
        $latestFilePath = data_get($catalogue, 'latest_file.file_path');
        $id = $catalogue['id'] ?? null;

        $catalogue['logo_url'] = $this->toAbsoluteUrl($base, $logo);
        $catalogue['latest_file_url'] = $this->toAbsoluteUrl($base, $latestFilePath);

        if (!empty($id)) {
            $catalogue['open_url'] = $base . '/api/catalogues/' . $id . '/open';
            $catalogue['latest_api_url'] = $base . '/api/catalogues/' . $id . '/latest';
        }

        return $catalogue;
    }

    private function toAbsoluteUrl(string $base, $pathOrUrl): ?string
    {
        if (empty($pathOrUrl) || !is_string($pathOrUrl)) {
            return null;
        }
        if (str_starts_with($pathOrUrl, 'http://') || str_starts_with($pathOrUrl, 'https://')) {
            return $pathOrUrl;
        }
        if (!str_starts_with($pathOrUrl, '/')) {
            $pathOrUrl = '/' . $pathOrUrl;
        }
        return $base . $pathOrUrl;
    }
}


