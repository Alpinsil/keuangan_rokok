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
        Schema::create('data_perolehan_produksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_laporan')->constrained('periode_laporans')->cascadeOnDelete();
            $table->date('date');
            $table->string('name')->nullable();
            $table->decimal('tsg', 10, 2)->nullable();
            $table->decimal('hasil', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_perolehan_produksis');
    }
};
