<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SportScore\SportScoreService;

class playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Testing api SportScore while use the best methods to consume a API.';

    public function handle()
    {
        $service = new SportScoreService();
        $return = $service
            ->sports()
            ->get();

        dd($return);
    }
}
