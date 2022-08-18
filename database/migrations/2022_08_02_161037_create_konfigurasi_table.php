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
        Schema::create('konfigurasi', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('favicon');
            $table->string('metadata');
            $table->longtext('deskripsi');
            $table->string('logo_header');
            $table->string('logo_footer');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
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
        Schema::dropIfExists('konfigurasi');
    }
};
