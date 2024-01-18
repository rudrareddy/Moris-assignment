<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('times')->insert([
        ['time' => '9:00am'],
        ['time' => '10:00am'],
        ['time' => '11:00am'],
        ['time' => '12:00pm'],
        ['time' => '1:00pm'],
        ['time' => '2:00pm'],
        ['time' => '3:00pm'],
        ['time' => '4:00pm'],
        ['time' => '5:00pm'],
        ['time' => '6:00pm'],
     ]);
    }
}
