<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    use HasFactory;
    protected $table ="karyawan";
    protected $primaryKey ="id_karyawan";

    public function tampil_karyawan(){
        $query = \DB::table('karyawan')->get();
        return $query;
    }
}
