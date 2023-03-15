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
        Schema::create('basis_pengetahuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('gejala_id', 4)->index('basis_pengetahuan_gejala_id_foreign');
            $table->char('penyakit_id', 4)->index('basis_pengetahuan_penyakit_id_foreign');
            $table->double('cf', 8, 2);
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
        Schema::dropIfExists('basis_pengetahuan');
    }
};
