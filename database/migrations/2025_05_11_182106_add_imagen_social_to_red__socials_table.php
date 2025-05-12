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
        Schema::table('red__socials', function (Blueprint $table) {
            //agregando la columna imagen_social
            $table->string('imagen_social')->nullable()->after('id'); // o donde prefieras
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('red__socials', function (Blueprint $table) {
            //
        });
    }
};
