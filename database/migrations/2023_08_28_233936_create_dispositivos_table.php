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
        Schema::create('ELECTRONICOS_dispositivos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('num_serie');
            $table->string('asset_name');
            $table->string('mac_address');
            $table->string('ip_address')->nullable();
            $table->string('owner');
            $table->string('ubicacion')->nullable();
            $table->string('proceso')->nullable();
            $table->string('fecha_compra')->nullable();
            $table->string('garantia_inicio')->nullable();
            $table->string('garantia_fin')->nullable();
            $table->string('active');
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
        Schema::dropIfExists('dispositivos');
    }
};
