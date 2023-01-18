<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Cattle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Changetype extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'type:change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change cattle type';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
            $today=Carbon::today()->toDateString();
            DB::table('cattle')
                ->where('Tipas', '=',Cattle::CATTLE_TYPE_3)
                ->where('VersData','=',$today)
                ->update(['Tipas' => Cattle::CATTLE_TYPE_1]);
      $this->info('Successfully');
    }
}
