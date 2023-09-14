<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id('TransferID');  // Primary Key
            $table->unsignedBigInteger('SenderUserID');  // Foreign Key
            $table->unsignedBigInteger('ReceiverUserID');  // Foreign Key
            $table->unsignedBigInteger('CryptoID');  // Foreign Key
            $table->decimal('Amount', 18, 8);  // Amount in cryptocurrency
            $table->date('Date');
            $table->time('Time');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('SenderUserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('ReceiverUserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('CryptoID')->references('CryptoID')->on('cryptocurrencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
