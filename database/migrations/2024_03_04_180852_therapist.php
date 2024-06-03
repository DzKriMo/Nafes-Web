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
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('bio')->nullable();
            $table->string('specialization')->nullable();
            $table->string('contact_info');
            $table->unsignedTinyInteger('rating')->nullable();
<<<<<<< HEAD
            $table->string('features')->nullable();
=======
            $table->string('features');
            $table->timestamps();
>>>>>>> 29abd5a4e331204e6883eb18cc27968263fcfcaa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapists');
    }
};
