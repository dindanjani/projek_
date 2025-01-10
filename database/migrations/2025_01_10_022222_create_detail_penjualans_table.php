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
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PenjualanId');
            $table->unsignedBigInteger('ProdukId');
            $table->integer('JumlahProduk');
            $table->decimal('SubTotal',10,2);
            $table->timestamps();


            $table->foreign('PenjualanId')->references('id')->on('penjualans')->onDelete('cascade');
            $table->foreign('ProdukId')->references('id')->on('produks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penjualans');
    }
};
