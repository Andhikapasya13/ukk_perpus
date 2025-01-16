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
        Schema::create('kategosibukus', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kategori_id')->constrained(table: 'kategori_buku');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahun terbit');
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
        Schema::dropIfExists('kategosibukus');
    }
};
