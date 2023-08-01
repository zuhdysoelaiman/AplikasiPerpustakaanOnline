<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota_model extends Model
{
    use HasFactory;
    protected $table ="anggota";
    protected $primaryKey ="id_anggota";

    public function tampil_anggota(){
        $query = \DB::table('anggota')->get();
        return $query;
    }
}
