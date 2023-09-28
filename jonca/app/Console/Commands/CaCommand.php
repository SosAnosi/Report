<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MainController;

class CaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ca:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mise à jour CA tous les jours';

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
        $controller->cronCa();
        \Log::info("Mise à jour CA tous les jours");
        return Command::SUCCESS;
    }
}
