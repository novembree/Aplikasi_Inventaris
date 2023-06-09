<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barangbaru extends Model
{
    use HasFactory;

    protected $table = "tb_barangbarus";
    protected $primaryKey = "id_barang";
    protected $fillable = [
        'id_barang', 'tanggal_masuk', 'jumlah_barang'
    ];

    public function barang(){
        return $this->belongsTo(tb_barangs::class,'id_barang');
    }

}
