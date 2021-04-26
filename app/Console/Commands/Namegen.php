<?php

namespace App\Console\Commands;

use App\NameLists\Flavors;
use App\NameLists\NationalParks;
use Illuminate\Console\Command;



class Namegen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'namegen {namelist?}';

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
        $nameset = $this->argument('namelist') ?? 'flavors';

        $name = self::{$nameset}();

        $this->line($name);

        return 0;
    }

    private static function flavors(){
        $name = Flavors::generate();

        return $name;
    }

    private static function parks() {

        $name = NationalParks::generate();

        return $name;
    }
}
