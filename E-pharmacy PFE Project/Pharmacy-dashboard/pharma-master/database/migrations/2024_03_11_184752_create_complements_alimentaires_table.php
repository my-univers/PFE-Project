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
        Schema::create('complements_alimentaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 150)->nullable(false);
            $table->string('descr', 3000);
            $table->float('prix')->nullable(false);
            $table->integer('qte_en_stock')->nullable(false);
            $table->string('image_path', 1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complements_alimentaires');
    }
};
