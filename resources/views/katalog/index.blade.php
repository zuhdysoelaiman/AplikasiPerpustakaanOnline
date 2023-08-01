@extends('layout1.main2')
@section('content')

<h4><b>Data Katalog</b></h4>
<br>
<a href="{{ asset('katalog/tambah')  }}"class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID_katalog</td>
    <td><b>Nama Katalog</td>
    <td><b>Penerbit</td>
    <td><b>Pengarang</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($katalog as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_katalog }}</td>
    <td>{{ $rows->nama_katalog }}</td>
    <td>{{ $rows->penerbit }}</td>
    <td>{{ $rows->pengarang }}</td>
    <td>
        <div class="btn-group">
            <a  class="btn btn-warning" href="{{ url('katalog/edit/'.$rows->id_katalog ) }}">Edit</a>
            <a  class="btn btn-danger" href="{{ url('katalog/delete/'.$rows->id_katalog ) }}">Delete</a>
    </div>
</td>
</tr>
<?php 
}
?>
</table>
@endsection