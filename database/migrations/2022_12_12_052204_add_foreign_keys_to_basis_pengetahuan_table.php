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
        Schema::table('basis_pengetahuan', function (Blueprint $table) {
            $table->foreign(['penyakit_id'])->references(['id'])->on('penyakit')->onDelete('CASCADE');
            $table->foreign(['gejala_id'])->references(['id'])->on('gejala')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basis_pengetahuan', function (Blueprint $table) {
            $table->dropForeign('basis_pengetahuan_penyakit_id_foreign');
            $table->dropForeign('basis_pengetahuan_gejala_id_foreign');
        });
    }
};
