<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiGhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaighe', function (Blueprint $table) {
            $table->increments('MaLoaiGhe');
            $table->string('TenLoai');
            $table->integer('MaGia')->unsigned();
            $table->timestamps();

            $table->foreign('MaGia')->references('MaGia')->on('gia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_ghes');
    }
}
