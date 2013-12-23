<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class RandomPriceGeneratorCommand extends Command
{

    /**
    * The console command name.
    *
    * @var string
    */
    protected $name = 'cuantocuesta:random';

    /**
    * The console command description.
    *
    * @var string
    */
    protected $description = 'Generate random prices';

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
    public function fire()
    {
        for ($i=0; $i < 1000; $i++) {
            $report = PriceReport::create(
                array(
                    'product_id' => rand(1, 50),
                    'province_id' => 5,
                    'price' => rand(1, 100),
                    'created_at' => Carbon\Carbon::now()->subDays(rand(60, 90))
                )
            );
            $this->info('Created report:' . $report->id);
        }
    }

    /**
    * Get the console command arguments.
    *
    * @return array
    */
    protected function getArguments()
    {
        return array();
    }

    /**
    * Get the console command options.
    *
    * @return array
    */
    protected function getOptions()
    {
        return array();
    }
}
