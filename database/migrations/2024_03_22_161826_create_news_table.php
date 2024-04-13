<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->id('idnoticia');
            $table->string('titulo', 45)->nullable();
            $table->string('pie_de_imagen', 45)->nullable();
            $table->date('fecha')->nullable();
            $table->string('descripcion', 45)->nullable();
            $table->string('autor', 45)->nullable();
            $table->string('imagen', 45)->nullable();
            $table->unsignedBigInteger('region_idregion');
            $table->unsignedBigInteger('usuarios_idusuarios');
            $table->foreign('region_idregion')->references('idregion')->on('region')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('usuarios_idusuarios')->references('idusuarios')->on('usuarios')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('noticia');
    }
};