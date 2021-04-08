<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    public $timestamps = 'false';
    protected $fillable = ['nis','nhnajar', 'nmsis', 'jurusan', 'jksisw', 'wali', 'tlpwl'];

    public function transaksi()
    {
        return $this->hasMany('App\M_Transaksi');
    }
}
