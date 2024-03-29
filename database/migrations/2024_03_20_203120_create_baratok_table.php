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
        Schema::create('baratok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barat_id');
            $table->boolean('elfogadva')->default(false); // új oszlop a jelölés elfogadásának jelzésére
            $table->timestamps();
        
            // Külső kulcsok definiálása
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('barat_id')->references('id')->on('users')->onDelete('cascade');
        
            // Egyedi kulcs meghatározása, hogy ne lehessen ugyanazt a barátot többször hozzáadni
            $table->unique(['user_id', 'barat_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baratok');
    }
};
