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
        Schema::table('nuestra__historias', function (Blueprint $table) {
             //agregando la columna descripcion_historia
             $table->text('descripcion_historia')->after('ubicacion'); // o donde prefieras
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nuestra__historias', function (Blueprint $table) {
            //
        });
    }
};
