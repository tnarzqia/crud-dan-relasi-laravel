<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list__extras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('siswa_id');
            $table->bigInteger('extra_id');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('murids')->onDelete('cascade');
            $table->foreign('extra_id')->references('id')->on('ektras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list__extras');
    }
}
