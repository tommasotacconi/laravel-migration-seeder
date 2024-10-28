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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30)->nullable(false);
            $table->string('arrival_station', 30)->nullable(false);
            $table->string('departure_station', 30);
            $table->datetime('arrival_time')->nullable(false);
            $table->datetime('departure_time')->nullable(false);
            $table->char('identification_number', 20)->nullable(false);
            $table->tinyInteger('cars_number',false, true);
            $table->boolean('on_time')->nullable(false);
            $table->boolean('cancelled')->default(false)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
