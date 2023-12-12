<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;


class SportScoreService
{
    use HasSports;
    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'X-Rapidapi-Key' => 'e4686c62cbmsh91fe5c7e997c1e2p1c951bjsn8b51b784a907',
            'X-Rapidapi-Host' => 'sportscore1.p.rapidapi.com',
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }

}
