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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(false);
            $table->string('descr')->nullable(false);
            $table->float('prix', 10,2)->nullable(false);
            $table->integer('qte_en_stock')->nullable(false);
            $table->boolean('ordonnance');
            $table->string('image_path', 2500);
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade');;
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
        Schema::dropIfExists('produits');
    }
};
