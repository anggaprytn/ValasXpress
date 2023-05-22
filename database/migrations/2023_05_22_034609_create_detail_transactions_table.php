<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Transaksi_ID');
            $table->unsignedBigInteger('NamaValas');
            $table->double('Rate');
            $table->integer('Qty');
            $table->timestamps();

            $table->foreign('Transaksi_ID')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('NamaValas')->references('id')->on('valas')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transactions');
    }
}
