<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categira_noticia', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_idcategoria');
            $table->unsignedBigInteger('noticia_idnoticia');
            $table->foreign('categoria_idcategoria')->references('idcategoria')->on('categoria')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('noticia_idnoticia')->references('idnoticia')->on('noticia')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categira_noticia');
    }
};
