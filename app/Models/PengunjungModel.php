<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengunjungModel extends Model
{
    use HasFactory;
    protected $table ="pengunjung";
    protected $primaryKey ="id";

    public function tampil_pengunjung(){
        $query = \DB::table('pengunjung')->get();
        return $query;
    }
}
