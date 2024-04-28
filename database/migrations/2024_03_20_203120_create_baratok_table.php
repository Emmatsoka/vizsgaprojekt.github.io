<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('baratok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barat_id');
            $table->enum('statusz', ['elkuldve', 'elfogadva'])->default('elkuldve');
            $table->date('baratok_ezota')->nullable();

            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('barat_id')->references('id')->on('users')->onDelete('cascade');


            $table->unique(['user_id', 'barat_id']);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('baratok');
    }
};
