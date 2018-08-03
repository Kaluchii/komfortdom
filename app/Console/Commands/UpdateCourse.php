<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Agents\UpdateAgent;

class UpdateCourse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'course:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It command used to update the exchange rate with the help of CRON';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UpdateAgent $upd)
    {
        parent::__construct();
        $this->updateAgent = $upd;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "http://185.111.107.122/courses.json";

        $dataObj = json_decode(file_get_contents($url), true);
        $price = $dataObj['courses']['usd'];
        if($price){
            $this->updateAgent->update('prices', 0, ['dollar' => $price]);
            echo('Course success update. USD to KZT course value = ' . $price."\n");
        } else {
            echo("Course not updated\n");
        }
    }

}
