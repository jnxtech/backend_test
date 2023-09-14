<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id('WalletID');  // Primary Key
            $table->unsignedBigInteger('UserID');  // Foreign Key
            $table->unsignedBigInteger('CryptoID');  // Foreign Key
            $table->decimal('Balance', 18, 8);  // Balance with 8 decimal places
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('CryptoID')->references('CryptoID')->on('cryptocurrencies')->onDelete('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('wallets');
    }
};

