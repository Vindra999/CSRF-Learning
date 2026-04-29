<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('title');              // judul buku
            $table->string('author');             // penulis
            $table->string('isbn')->unique();     // ISBN unik
            $table->decimal('price', 10, 2);    // harga
            $table->integer('stock')->default(0); // stok
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};