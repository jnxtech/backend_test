<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('TransID');  // Primary Key
            $table->date('Date');
            $table->time('Time');
            $table->unsignedBigInteger('BuyerUID');  // Foreign Key
            $table->unsignedBigInteger('SellerUID');  // Foreign Key
            $table->unsignedBigInteger('CryptoID');  // Foreign Key
            $table->decimal('Amount', 18, 8);  // Amount in cryptocurrency
            $table->decimal('Price', 18, 2);  // Price in fiat currency
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('BuyerUID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('SellerUID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('CryptoID')->references('CryptoID')->on('cryptocurrencies')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
