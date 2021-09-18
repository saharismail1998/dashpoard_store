<?php

namespace App\services;
use Illuminate\Support\Facades\Http;
class GeoIp
{

    public function get($ip)
    {
        $response = Http::baseUrl('https://api.ipgeolocation.io')
            ->get('ipgeo', [
                'apiKey' => 'd3ea37c1183f428fa2f212d7785bf4a2',
                'ip' => $ip
            ]);
        $data = $response->json();
        return $data;
    }
}
