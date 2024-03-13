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
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 150)->nullable(false);
            $table->string('descr', 3000);
            $table->float('prix', 10,2)->nullable(false);
            $table->integer('qte_en_stock')->nullable(false);
            $table->boolean('ordonnance');
            $table->string('image_path', 1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicaments');
    }
};
