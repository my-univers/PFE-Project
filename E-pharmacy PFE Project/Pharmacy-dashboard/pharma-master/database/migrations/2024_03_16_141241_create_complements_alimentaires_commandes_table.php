<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complements_alimentaires_commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained('commandes');
            $table->foreignId('complement_id')->constrained('complements_alimentaires');
            $table->integer('quantite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complements_alimentaires_commandes');
    }
};
