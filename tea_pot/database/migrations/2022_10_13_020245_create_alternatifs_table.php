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
        Schema::create('alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alternatif', 11)->nullable();
            $table->string('nama_alternatif')->nullable();
            $table->string('rarity')->nullable();
            $table->string('role')->nullable();
            $table->string('weapon')->nullable();
            $table->string('element')->nullable();
            $table->string('detail', 3000)->nullable();
            $table->string('image_char')->nullable();
            $table->integer('w1')->nullable();
            $table->integer('w2')->nullable();
            $table->integer('w3')->nullable();
            $table->integer('w4')->nullable();
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
        Schema::dropIfExists('alternatif');
    }
};
