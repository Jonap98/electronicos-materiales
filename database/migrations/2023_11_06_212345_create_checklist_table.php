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
        Schema::create('INVENTARIO_checklist', function (Blueprint $table) {
            $table->id();
            $table->string('asset_name');
            $table->integer('status_enciende');
            $table->integer('status_pantalla');
            $table->integer('status_partes_funcionamiento');
            $table->integer('status_partes_faltantes');
            $table->integer('status_general');
            $table->string('descripcion_problema', 500)->nullable();
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
        Schema::dropIfExists('checklist');
    }
};
