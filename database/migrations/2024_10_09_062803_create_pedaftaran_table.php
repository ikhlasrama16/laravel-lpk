<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pednaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Jenis Kelamin
            $table->string('asal_sekolah'); // Asal Sekolah
            $table->string('alamat'); // Alamat
            $table->string('kode_pos'); // Kode Pos
            $table->string('provinsi'); // Provinsi
            $table->text('alasan_ingin_kerja'); // Alasan Ingin Kerja di Jepang
            $table->string('nama_orang_tua'); // Nama Lengkap Orang Tua
            $table->string('pekerjaan_orang_tua'); // Pekerjaan Orang Tua
            $table->string('alamat_orang_tua'); // Alamat Orang Tua
            $table->string('phone_orang_tua'); // No Telepon Orang Tua
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedaftaran');
    }
};
