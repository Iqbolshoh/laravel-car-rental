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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('name');               // McLaren 720S
            $table->string('category');           // Exotic, SUV...
            $table->string('image');

            $table->decimal('price_per_day', 10, 2);

            $table->integer('horsepower');        // 710
            $table->string('transmission');       // Automatic
            $table->integer('seats');             // 2
            $table->string('fuel_type');          // Petrol

            $table->enum('status', [
                'available',
                'reserved',
                'maintenance'
            ])->default('available');

            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
