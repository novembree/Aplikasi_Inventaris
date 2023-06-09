<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_member extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "tb_members";
    protected $primaryKey = "id_member";
    protected $fillable = [
        'id_member','username', 'password', 'pendidikan_member', 'email_member',
        'foto', 'no_hp', 'jabatan_member','alamat_member', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'username');
    }
}
