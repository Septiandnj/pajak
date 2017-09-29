<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no');
            $table->date('tanggal');
            $table->string('nama_pemilik');
            $table->text('alamat');
            $table->string('nama_perusahaan');
            $table->string('npwpd')->nullable();
            $table->string('naskah');
            $table->integer('jenis_id')->unsigned();
            $table->foreign('jenis_id')->references('id')
                  ->on('reklames')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->float('ukuran');
            $table->float('ketinggian');
            $table->text('lokasi');
            $table->string('no_persil');
            $table->text('info_alamat_lengkap');
            $table->integer('sudutpandang_id')->unsigned();
            $table->foreign('sudutpandang_id')->references('id')
                  ->on('sudutpandangs')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('fungsijalan_id')->unsigned();
            $table->foreign('fungsijalan_id')->references('id')
                  ->on('fungsijalans')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('fungsiruang_id')->unsigned();
            $table->foreign('fungsiruang_id')->references('id')
                  ->on('fungsiruangs')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('jumlah_muka');
            $table->integer('harga_dasar_strategis');
            $table->string('masa_izin');
            $table->string('cara_pemasangan');
            $table->integer('jumlah_unit');
            $table->string('koordinatu');
            $table->string('koordinats');
            $table->integer('foto')->nullable();
            $table->decimal('njor', 15, 2);
            $table->decimal('nspr', 15, 2);
            $table->decimal('nsr', 15, 2);
            $table->decimal('pr', 15, 2);
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
        Schema::dropIfExists('entries');
    }
}
