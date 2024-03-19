<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiersSecoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('premiers_secours', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('marque')->nullable(false);
            $table->decimal('prix', 8, 2)->nullable(false);
            $table->integer('qte_en_stock')->nullable(false);
            $table->string('image_path', 2500);
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
        Schema::dropIfExists('premiers_secours');
    }
}
