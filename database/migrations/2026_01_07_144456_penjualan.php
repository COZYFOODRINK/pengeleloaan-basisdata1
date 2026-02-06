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
            Schema::create('penjualan', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignID('pelanggan_id')->constrained('pelanggan')->cascadeOnDelete();
            $table->date('Tanggal_Penjualan');
            $table->decimal('TotalHarga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
