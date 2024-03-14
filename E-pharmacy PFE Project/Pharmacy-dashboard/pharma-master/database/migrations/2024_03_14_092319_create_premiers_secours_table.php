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
        Schema::create('premiers_secours', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->text('description');
            $table->string('marque');
            $table->text('composition');
            $table->decimal('prix', 8, 2);
            $table->integer('qte_en_stock');
            $table->string('image_path');
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
};
