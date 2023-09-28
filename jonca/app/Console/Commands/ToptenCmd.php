<?php

namespace App\Console\Commands;

use Illuminate\Http\Request;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\MainController;

class ToptenCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'topten:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mise à jour Topten tous les jours';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $controller = new MainController(); // make sure to import the controller
        $controller->toptenCron();
        \Log::info("Mise à jour Topten tous les jours");
        return Command::SUCCESS;
    }
}
