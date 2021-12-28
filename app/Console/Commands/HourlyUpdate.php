<?php

namespace App\Console\Commands;

use App\Models\BusinessInvites;
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



        $i=0;

        $FileName='Io_clifor_detcon.dat';
        $personalinfo = file('C:\DatFile/'.$FileName);


        //dd($personalinfo);
        //
        $Header=array();

        $Header=explode('|',$personalinfo[0]);

        //  dd($Header);
        foreach ($personalinfo as $personalinf){
            $Item=explode('|',$personalinf);
            // dd($Item);


            if ($i>0)
            {


                BusinessInvites::create([
                    'COGNOME_NOME'    => $Item[7]
                    ,'NOME'           => $Item[8]
                    ,'EMAIL1'        =>  $Item[20]
                ]);
            }




            $i=$i+1;



        }





        return 0;
    }
}
