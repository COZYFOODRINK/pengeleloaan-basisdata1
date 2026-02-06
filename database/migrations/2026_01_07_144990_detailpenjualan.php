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
            Schema::create('detailpenjualan', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignID('penjualan_id')->constrained('penjualan')->cascadeOnDelete();
            $table->foreignID('produk_id')->constrained('produk')->cascadeOnDelete();
            $table->integer('JumlahProduk');
            $table->decimal('SubTotal',);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualan');
    }
};
