<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'noid';
    protected $fillable = ['noid', 'tglkwi', 'jml_bulan', 'jml_rupiah', 'nis', 'keterangan'];
    public $timestamps = 'false';

    public function siswa()
    {
        return $this->belongsTo('App\M_Siswa', 'nis', 'nis');
    }
}
