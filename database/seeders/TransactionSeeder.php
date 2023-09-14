<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([

            'BuyerUID' => 1,
            'SellerUID' => 2,
            'CryptoID' => 1,
            'Amount' => 0.1,
            'Price' => 5000,
            'Date' => now()->toDateString(),
            'Time' => now()->toTimeString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}

