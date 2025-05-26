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
        Schema::table('banners', function (Blueprint $table) {
            //agregando la columna titulo y enlace
            $table->string('titulo')->nullable();
            $table->string('enlace')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            //elimina las columnas titulo y enlace 
            $table->dropColumn(['titulo','enlace']);
        });
    }
};
