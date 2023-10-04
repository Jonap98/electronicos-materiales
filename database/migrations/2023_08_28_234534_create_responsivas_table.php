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
        Schema::create('ELECTRONICOS_responsivas', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('supervisor');
            $table->string('area');
            $table->string('asset_name');
            $table->string('quien_entrega');
            $table->string('comentarios')->nullable();
            $table->string('firma')->nullable();
            $table->datetime('fecha_entrega');
            $table->datetime('fecha_retiro')->nullable();
            $table->string('motivo_retiro')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('responsivas');
    }
};
