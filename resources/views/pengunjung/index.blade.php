@extends('layout1.main2')
@section('content')

<h4><b>Daftar Pengunjung Perpustakaan</b></h4>
<br>
<a href="{{ asset('pengunjung/tambah')  }}"class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID Pengunjung</td>
    <td><b>Nama Anggota</td>
    <td><b>Alamat</td>
    <td><b>Contact Person</td>
    <td><b>Aksi</td>
 </tr>   
<?php
$no=0;
foreach ($pengunjung as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id }}</td>
    <td>{{ $rows->nama }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->contact_person }}</td>
    <td>
        <div class="btn-group">
            <a  class="btn btn-warning" href="{{ url('pengunjung/edit/'.$rows->id ) }}">Edit</a>
            <a  class="btn btn-danger" href="{{ url('pengunjung/delete/'.$rows->id ) }}">Delete</a>
    </div>
</td>
</tr>
<?php 
}
?>
</table>
@endsection