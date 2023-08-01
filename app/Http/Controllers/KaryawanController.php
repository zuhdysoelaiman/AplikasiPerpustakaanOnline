<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;

class KaryawanController extends Controller
{
    public function index (){
       // return ("Testing karyawan");
       $mykaryawan = new KaryawanModel();
       $karyawan = $mykaryawan->tampil_karyawan();

       $data = array('karyawan' => $karyawan);
        return view('karyawan/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('karyawan/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('karyawan')
         ->insert([
             'nama_karyawan'  =>  $request->nama_karyawan,
             'alamat_karyawan'  =>  $request->alamat_karyawan,
             'nohp_karyawan'  =>  $request->nohp_karyawan,
             
         ]);
         return redirect('karyawan');
     }
     public function edit($id_karyawan){
        $data['karyawan'] = KaryawanModel::where('id_karyawan',$id_karyawan)->first();

        return view('karyawan/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = KaryawanModel::where('id_karyawan',$request->id_karyawan)
        ->update([
            'nama_karyawan'  =>  $request->nama_karyawan,
            'alamat_karyawan'  =>  $request->alamat_karyawan,
            'nohp_karyawan'  =>  $request->nohp_karyawan,
       
             ]);
        return redirect('karyawan');
    }

    public function delete ($id_karyawan){
        $query = \DB::table('karyawan')->where('id_karyawan',$id_karyawan)->delete();
        return redirect('karyawan');
    }
}
