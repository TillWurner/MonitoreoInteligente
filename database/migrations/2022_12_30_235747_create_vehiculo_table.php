<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->float('monto_pagar')->nullable();
            $table->unsignedBigInteger("id_parqueo")->nullable();
            $table->foreign('id_parqueo')->on('parqueo')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('vehiculo');
    }
};
