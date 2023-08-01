<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengunjungModel;

class PengunjungController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mypengunjung = new PengunjungModel();
        $pengunjung = $mypengunjung->tampil_pengunjung();
        
        $data = array('pengunjung' => $pengunjung);
        return view('pengunjung/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('pengunjung/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('pengunjung')
         ->insert([
             'nama' => $request->nama,
             'alamat'  =>  $request->alamat,
             'contact_person'  =>  $request->contact_person,
             
         ]);
         return redirect('pengunjung');
     }
     public function edit($id){
        $pengunjung = \DB::table('pengunjung')->where('id', $id)->first();
        $data = array('pengunjung' => $pengunjung);
        return view('pengunjung/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Pr;;oses');
        $query = PengunjungModel::where('id',$request->id)
        ->update([
            'nama' => $request->nama,
            'alamat'  =>  $request->alamat,
            'contact_person'  =>  $request->contact_person,
       
             ]);
        return redirect('pengunjung');
    }

    public function delete ($id){
        $query = \DB::table('pengunjung')->where('id',$id)->delete();
        return redirect('pengunjung');
    }
}
