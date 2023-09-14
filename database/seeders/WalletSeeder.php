<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WalletSeeder extends Seeder
{
    public function run()
    {
        DB::table('wallets')->insert([
            'UserID' => 1,
            'CryptoID' => 1,
            'Balance' => 0.5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}

