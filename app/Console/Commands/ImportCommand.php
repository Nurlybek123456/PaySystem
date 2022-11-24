<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use Illuminate\Console\Command;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:importData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'RunBoy run Boy';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $import = new ImportDataClient();
        $response = $import->client->request('get', '/defineBank/440043',);

    }
}
