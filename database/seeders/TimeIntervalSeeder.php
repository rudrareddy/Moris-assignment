<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TimeIntervalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('time_intervals')->insert([
        ['time_id' => '1','time_interval' =>'09:00am-09:30am'],
        ['time_id' => '1','time_interval' =>'09:30am-10:00am'],
        ['time_id' => '2','time_interval' =>'10:00am-10:30am'],
        ['time_id' => '2','time_interval' =>'10:30am-11:00am'],
        ['time_id' => '3','time_interval' =>'11:00am-11:30am'],
        ['time_id' => '3','time_interval' =>'11:30am-12:00pm'],
        ['time_id' => '4','time_interval' =>'12:00pm-12:30pm'],
        ['time_id' => '4','time_interval' =>'12:30pm-01:00pm'],
        ['time_id' => '5','time_interval' =>'01:00pm-01:30pm'],
        ['time_id' => '5','time_interval' =>'01:30pm-02:00pm'],
        ['time_id' => '6','time_interval' =>'02:00pm-02:30pm'],
        ['time_id' => '6','time_interval' =>'02:30pm-03:00pm'],
        ['time_id' => '7','time_interval' =>'03:00pm-03:30pm'],
        ['time_id' => '7','time_interval' =>'03:30pm-04:00pm'],
        ['time_id' => '8','time_interval' =>'04:00pm-04:30pm'],
        ['time_id' => '8','time_interval' =>'04:30pm-05:00pm'],

     ]);
    }
}
