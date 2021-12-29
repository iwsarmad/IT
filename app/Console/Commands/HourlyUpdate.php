<?php

namespace App\Console\Commands;

use App\Models\BusinessInvites;
use App\Models\DumpsMaps;
use App\Models\IoAgent;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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
            //DumpsMaps
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if(strlen($file)>2){

                        $NameSpace="/App/Models/";
                        $strNameSpace = str_replace('/', '\#', $NameSpace);
                        $CleanName = str_replace('#', '', $strNameSpace);

                        DumpsMaps::create([
                            "FileName"=>$file,
                            "CronText"=>$CleanName.explode('.',$file)[0]
                        ]);
                    }

                }
                closedir($dh);
            }
        }






        $FilesDumps = DB::table('dumps_maps')->select('FileName','CronText')->distinct()->get();

        foreach ($FilesDumps as $FilesDump) {

            $FilesDump->CronText::truncate();
            $personalinfo = file('C:\DatFile/' . $FilesDump->FileName);
            $personalinfo = str_replace("\r\n", "", $personalinfo);
            $Header = explode('|', $personalinfo[0]); // this is for foreach Count of each colmun in row
            $RowSizer = sizeof($Header);
            foreach ($personalinfo as $key=> $personalinf) {
                if($key>0){
                    $ArrayLine=array();
                    $Items = explode('|', $personalinf);
                    for($i=0;$i<$RowSizer;$i++){
                        $ArrayLine[$Header[$i]]=$Items[$i];
                    }
                    //  dd($ArrayLine);
                    $FilesDump->CronText::create($ArrayLine);
                }


            }
        }



        return 0;
    }
}
