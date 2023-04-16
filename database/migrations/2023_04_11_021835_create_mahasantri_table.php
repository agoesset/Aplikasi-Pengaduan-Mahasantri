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
        Schema::create('mahasantri', function (Blueprint $table) {
            $table->char('nim', 16);
            $table->string('nama', 35);
            $table->string('username', 25);
            $table->string('password', 35);
            $table->string('telp', 13);
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasantri');
    }
};
