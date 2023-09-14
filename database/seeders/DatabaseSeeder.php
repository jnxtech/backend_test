<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Users should be seeded first because other tables depend on this table
        $this->call(UserSeeder::class);

        // Cryptocurrencies can be seeded next, other tables like wallets, transactions depend on it
        $this->call(CryptocurrencySeeder::class);

        // Wallets table has foreign keys from users and cryptocurrencies, so it should be seeded next
        $this->call(WalletSeeder::class);

        // Transactions and Transfers depend on users and cryptocurrencies so they should be last
        $this->call(TransactionSeeder::class);
        $this->call(TransferSeeder::class);
    }
}
