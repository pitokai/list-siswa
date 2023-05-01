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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->unique();
            $table->foreignId('user_id')->nullable();
            $table->string('full_name');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('jurusan');
            $table->string('slug')->unique();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('mobile')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
