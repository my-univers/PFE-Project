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
        Schema::create('medicaments_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable(false);
            $table->unsignedBigInteger('medicament_id')->nullable(false);
            $table->integer('quantite')->nullable(false);
            $table->date('date_commande')->nullable(false);
            $table->string('statut', 100)->nullable(false);
            $table->decimal('total', 10, 2)->nullable(false);
            $table->timestamps();

            // définition des clés étrangères avec onDelete('cascade')
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('medicament_id')->references('id')->on('medicaments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicaments_commandes');
    }
};
