<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOjolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ojol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_outlet',100);
            $table->string('status',100);
            $table->string('nama',100);
            $table->string('deskripsi',225);
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
        Schema::dropIfExists('ojol');
    }
}
