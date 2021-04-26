<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\NameLists\Flavors;

class Namegen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'namegen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate memorable names for algos, projects and missions.';

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
        $name = Flavors::generate();

        $this->line($name);

        return 0;
    }
}
