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
        Schema::create('packs_premiers_secours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pack_id');
            $table->unsignedBigInteger('premier_secours_id');

            $table->string('nom');
            $table->text('description');
            $table->float('prix', 8, 2);
            $table->integer('qte_en_stock');

            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('cascade');
            $table->foreign('premier_secours_id')->references('id')->on('premiers_secours')->onDelete('cascade');
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
        Schema::dropIfExists('packs_premiers_secours');
    }
};
