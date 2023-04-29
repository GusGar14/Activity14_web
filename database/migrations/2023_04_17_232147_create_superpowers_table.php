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
        Schema::create('superpowers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name', 100);
            $table->longText('description')->nullable();
            $table->integer('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superpowers');
    }
};