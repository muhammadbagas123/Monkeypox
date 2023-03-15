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
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_penderita', 100);
            $table->string('gender', 100);
            $table->integer('usia')->nullable();
            $table->string('prov', 100);
            $table->char('penyakit_id', 4)->index('diagnosa_penyakit_id_foreign');
            $table->double('presentase', 8, 2);
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
        Schema::dropIfExists('diagnosa');
    }
};
