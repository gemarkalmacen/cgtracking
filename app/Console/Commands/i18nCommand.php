<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use App\Console\Generators\i18nGenerator;

class i18nCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name  = 'lang:js';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate translations to i18n format';

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
     * @return mixed
     */
    public function handle()
    {
        $generator = new i18nGenerator();
        $generator->run(
            toPathOS(base_path() . '\\resources\\js\\generated\\lang\\'),
            toPathOS(base_path() . '\\resources\\lang')
        );
        $this->info('Lang files generated.');
    }
}