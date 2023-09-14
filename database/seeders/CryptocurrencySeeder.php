<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CryptocurrencySeeder extends Seeder
{
    public function run()
    {
        DB::table('cryptocurrencies')->insert([
            'Name' => 'Bitcoin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}

