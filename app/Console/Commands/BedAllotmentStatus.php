<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Bed;
use App\BedAllotment;

class BedAllotmentStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bedAllotment:changeStatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        foreach (BedAllotment::all() as $bedAllotment){

            $start_date_time = $bedAllotment->start_date.' '.$bedAllotment->start_time;
            $end_date_time = $bedAllotment->end_date.' '.$bedAllotment->end_time;

            $bed = $bedAllotment->bed;
            if (Carbon::parse($start_date_time)->lt(now()) && Carbon::parse($end_date_time)->gt(now())){
                $bedAllotment->update([
                    'status'=> 'In Allotment'
                ]);
                $bed->update([
                    'status'=> 'In Allotment'
                ]);
            } else if(Carbon::parse($start_date_time)->lt(now()) && Carbon::parse($end_date_time)->lt(now())) {
                $bedAllotment->update([
                    'status'=> 'Old Allotment'
                ]);
                $bed->update([
                    'status'=> 'available'
                ]);
            } else {
                $bedAllotment->update([
                    'status'=> 'Up Coming Allotment'
                ]);
                $bed->update([
                    'status'=> 'available'
                ]);
            }

        }
    }
}
