<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->string('jenis_nilai')->nullable()->change();
            $table->string('kelas_ke')->nullable()->change();
            $table->unsignedBigInteger('id_siswa')->nullable()->change();
            $table->unsignedBigInteger('id_akademik')->nullable()->change();
            $table->decimal('tugas1', 5, 2)->nullable();
            $table->decimal('tugas2', 5, 2)->nullable();
            $table->decimal('tugas3', 5, 2)->nullable();
            $table->decimal('tugas4', 5, 2)->nullable();
            $table->decimal('tugas5', 5, 2)->nullable();
            $table->decimal('uts', 5, 2)->nullable();
            $table->decimal('uas', 5, 2)->nullable();
            $table->unsignedTinyInteger('semester')->nullable();
            $table->unsignedBigInteger('siswa_id')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->unsignedBigInteger('mapel_id')->nullable();
            $table->decimal('rata_nilai', 5, 2)->nullable();
            $table->string('nilai_huruf', 2)->nullable();
            $table->integer('ijin')->nullable();
            $table->integer('tanpa_ket')->nullable();
            $table->decimal('nilai_pth', 5, 2)->nullable();
            $table->decimal('nilai_ktr', 5, 2)->nullable();
            $table->string('nilai_huruf_pth', 2)->nullable();
            $table->string('nilai_huruf_ktr', 2)->nullable();
            $table->string('status')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->dropColumn([
                'tugas1', 'tugas2', 'tugas3', 'tugas4', 'tugas5', 'uts', 'uas',
                'semester', 'siswa_id', 'kelas_id', 'guru_id', 'mapel_id',
                'rata_nilai', 'nilai_huruf', 'ijin', 'tanpa_ket', 'nilai_pth',
                'nilai_ktr', 'nilai_huruf_pth', 'nilai_huruf_ktr', 'status',
            ]);
        });
    }
};