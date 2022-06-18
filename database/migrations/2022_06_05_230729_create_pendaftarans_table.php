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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            $table->string('reg_number');

            $table->integer('jenjang');
            $table->boolean('is_pesantren');
            $table->year('tahun_lulus');
            $table->integer('jenis_pendaftaran');
            $table->string('pilihan_kelas')->nullable();

            $table->year('tahun_ppdb'); //from empty input javascript

            $table->string('fullname');
            $table->string('nisn');
            $table->string('nik');
            $table->string('gender');
            $table->string('born_place');
            $table->date('born_date');
            $table->integer('agama');
            $table->integer('status_keluarga');
            $table->string('jumlah_saudara');
            $table->string('anak_ke', 2);
            $table->integer('hobi');
            $table->integer('cita_cita');
            $table->string('wa_number');
            $table->string('email');

            $table->string('address');
            $table->char('rt', 3);
            $table->char('rw', 3);
            $table->char('kode_pos', 5);
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');

            $table->string('no_kk');
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->integer('pekerjaan_ayah');
            $table->integer('penghasilan_ayah');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->integer('pekerjaan_ibu');

            $table->string('asal_sekolah');
            $table->string('seri_ijazah')->nullable();

            $table->string('kk');
            $table->string('akte');
            $table->string('foto')->nullable();

            $table->string('agree');
            $table->enum('status', ['reject', 'accept', 'pending'])->default('pending');

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
        Schema::dropIfExists('pendaftarans');
    }
};
