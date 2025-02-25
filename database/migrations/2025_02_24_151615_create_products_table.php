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
            $table->id(); // ID autoincremental
            $table->string('title'); // Título del producto
            $table->text('description')->nullable(); // Descripción del producto (puede ser nulo)
            $table->string('category'); // Categoría del producto
            $table->string('image')->nullable(); // Ruta de la imagen (puede ser nulo)
            $table->string('brand'); // Marca del producto
            $table->decimal('price', 8, 2); // Precio del producto (8 dígitos en total, 2 decimales)
            $table->integer('stock')->default(0); // Stock del producto (valor por defecto: 0)
            $table->timestamps(); // Columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // Elimina la tabla si se revierte la migración
    }
};