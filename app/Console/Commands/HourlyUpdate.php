<?php

namespace App\Console\Commands;

use App\Models\BusinessInvites;
use App\Models\DumpsMaps;
use Carbon\Carbon;
use Illuminate\Console\Command;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is Job for make update to the dt file on server';

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




        $dir='C:\DatFile/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if(strlen($file)>2){
                        DumpsMaps::create([
                            "FileName"=>$file,
                            "CronText"=>Carbon::now()->isoWeek
                        ]);
                    }

                }
                closedir($dh);
            }
        }




        return 0;
    }
}
