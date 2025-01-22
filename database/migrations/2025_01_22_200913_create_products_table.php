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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id (INT, PK, AUTO_INCREMENT)
            $table->string('name', 255); // name (VARCHAR, 255)
            $table->integer('stock'); // stock (INT)
            $table->foreignId('category_id') // category_id (FK, INT)
                ->constrained('categories') // Relación con la tabla categories
                ->onDelete('cascade'); // Elimina productos si se elimina la categoría
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
