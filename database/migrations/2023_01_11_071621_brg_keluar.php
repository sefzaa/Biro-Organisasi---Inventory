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
        Schema::create('brg_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_barang_keluar');
            $table->integer('id_barang');
            $table->integer('id_user');
            $table->integer('jumlah_barang_keluar')->nullable();
            $table->integer('stok')->nullable();
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
        Schema::dropIfExists('brg_keluar');
    }
};
