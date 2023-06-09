<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "tb_barangs";
    protected $primaryKey = "id_barang";
    protected $fillable = [
        'id_barang', 'nama_barang', 'jumlah_barang', 'deskripsi_barang', 'posisi_barang',
        'status_barang', 'foto_barang', 'img_qrcode'
    ];

    public function barangbaru(){
        return $this->hasMany(tb_barangbarus::class, 'id_barang');
    }
}
