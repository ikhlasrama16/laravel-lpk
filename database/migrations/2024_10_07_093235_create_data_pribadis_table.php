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
        Schema::create('data_pribadis', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Jenis Kelamin
            $table->string('asal_sekolah'); // Asal Sekolah
            $table->string('alamat'); // Alamat
            $table->string('kode_pos'); // Kode Pos
            $table->string('provinsi'); // Provinsi
            $table->text('alasan_kerja'); // Alasan Ingin Kerja di Jepang
            $table->string('name_parent'); // Nama Lengkap Orang Tua
            $table->string('job_parent'); // Pekerjaan Orang Tua
            $table->string('alamat_parent'); // Alamat Orang Tua
            $table->string('phone_parent'); // No Telepon Orang Tua
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pribadis');
    }
};
