<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {DB::table('users')->insert([
        [
            'Name' => 'Alice',
            'Email' => 'alice@example.com',
            'Password' => Hash::make('password'),
            'Balances' => 10000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'Name' => 'Bob',
            'Email' => 'bob@example.com',
            'Password' => Hash::make('password'),
            'Balances' => 8000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
    ]);


    }
}

