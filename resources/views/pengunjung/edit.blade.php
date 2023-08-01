@extends('layout1.main2')
@section('content')


<h4><b>Edit Pengunjung</b></h4>
<br>
<form action="{{ asset('pengunjung/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $pengunjung->id ?>">
<div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama" value="<?php echo $pengunjung->nama ?>" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" value="<?php echo $pengunjung->alamat ?>" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="contact_person" class="col-sm-2 col-form-label">Contact Person</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="contact_person" value="<?php echo $pengunjung->contact_person ?>" name="contact_person">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection