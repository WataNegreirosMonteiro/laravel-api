<?php

namespace App\Console\Commands;

use App\Services\SportScore\Entities\Sport;
use Illuminate\Console\Command;
use App\Services\SportScore\SportScoreService;

class playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Testing api SportScore while use the best methods to consume a API.';

    public function handle()
    {
        $service = new SportScoreService();
        $json = $service
            ->sports()
            ->get();

        /** @var Sport $sport1 */
        $sport1 = $json->first();

        dd($sport1);
    }
}
