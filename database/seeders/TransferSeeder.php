<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransferSeeder extends Seeder
{
    public function run()
    {
        DB::table('transfers')->insert([
            'SenderUserID' => 1,
            'ReceiverUserID' => 2,
            'CryptoID' => 1,
            'Amount' => 0.05,
            'Date' => now()->toDateString(),
            'Time' => now()->toTimeString(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);


    }
}

