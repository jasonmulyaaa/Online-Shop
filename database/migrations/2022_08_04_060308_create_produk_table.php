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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('harga');
            $table->string('gambar1');
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->longtext('deskripsi');
            $table->string('kategorigeneral');
            $table->integer('views');
            $table->string('slider')->nullable();
            $table->string('promo')->nullable();
            $table->string('diskon')->nullable();
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
        Schema::dropIfExists('produk');
    }
};
