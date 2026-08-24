<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilais';

    protected $fillable = [
        'jenis_nilai',
        'kelas_ke',
        'sakit',
        'izin',
        'tanpa_keterangan',
        'id_siswa',
        'id_akademik',
        'tugas1',
        'tugas2',
        'tugas3',
        'tugas4',
        'tugas5',
        'uts',
        'uas',
        'semester',
        'siswa_id',
        'kelas_id',
        'guru_id',
        'mapel_id',
        'rata_nilai',
        'nilai_huruf',
        'ijin',
        'tanpa_ket',
        'nilai_pth',
        'nilai_ktr',
        'nilai_huruf_pth',
        'nilai_huruf_ktr',
        'status'
    ];

    public function detail_nilai()
    {
        return $this->hasMany(Detail_nilai::class, 'id', 'id_nilai');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
    public function akademik()
    {
        return $this->belongsTo(Akademik::class, 'id_akademik', 'id');
    }
}
