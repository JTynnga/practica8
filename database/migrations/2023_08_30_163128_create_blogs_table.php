<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->binary('ruta');
            $table->string('tipo');
            $table->string('nombre');
            $table->string('descri');
            $table->binary('ruta_u');
            $table->string('nombre_u');
            $table->date('fecha');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE blogs MODIFY COLUMN  ruta LONGBLOB");
        DB::statement("ALTER TABLE blogs MODIFY COLUMN  ruta_u LONGBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
