<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valas', function (Blueprint $table) {
            $table->id();
            $table->string('NamaValas');
            $table->double('Nilai_Jual');
            $table->double('Nilai_Beli');
            $table->date('Tanggal_Rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valas');
    }
}
