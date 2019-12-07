<?php 
require 'koneksi.php'; 
include_once 'view/admin/header.php';
include_once 'view/admin/topmenu.php';
include_once 'view/admin/footer.php';
?>
<div class="container-fluid">
	<h1>form tambah</h1>
	<hr color="black">
	<form action="tampilan_1.php" method="POST">
	<h3>Biodata</h3>
	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Depan</label>
    	<div class="col-sm-10">
      	<input type="nama_depan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="nama depan" name="nama_depan">
    </div>
  </div>

  	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Belakang</label>
    	<div class="col-sm-10">
      	<input type="nama_belakang" class="form-control form-control-lg" id="colFormLabelLg" placeholder="nama belakang" name="nama_belakang">
    </div>
  </div>

  	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Handphone</label>
    	<div class="col-sm-10">
      	<input type="handphone" class="form-control form-control-lg" id="colFormLabelLg" placeholder="handphone" name="handphone">
    </div>
  </div>

  	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="email" name="email">
    </div>
  </div>

  	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Alamat</label>
    	<div class="col-sm-10">
      	<input type="alamat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Alamat" name="alamat">
    </div>
  </div>

  	<div class="form-group">
    <label for="exampleFormControlTextarea1">About</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about" placeholder="ceritakan tentang anda ?"></textarea>
  </div>

  <hr color="black">
  <h3>Skill</h3>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Kemampuan</label>
    	<div class="col-sm-10">
      	<input type="kemampuan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="kemampuan" name="kemampuan">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="kemampuan_2" class="form-control form-control-lg" id="colFormLabelLg" placeholder="kemampuan" name="kemampuan_2">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="kemampuan_3" class="form-control form-control-lg" id="colFormLabelLg" placeholder="kemampuan" name="kemampuan_3">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="kemampuan_4" class="form-control form-control-lg" id="colFormLabelLg" placeholder="kemampuan" name="kemampuan_4">
    </div>
  </div>

  <hr color="black">
  <h3>experience</h3>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Pengalaman</label>
    	<div class="col-sm-10">
      	<input type="pengalaman" class="form-control form-control-lg" id="colFormLabelLg" placeholder="web developer" name="pengalaman">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="judul" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Intelitec Solutions" name="judul">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="tanggal" class="form-control form-control-lg" id="colFormLabelLg" placeholder="desember 2012 - maret 2014" name="tanggal">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="ceritakan pengalaman anda ?"></textarea>
  </div><br>

  <!-- pengalaman kedua -->

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Pengalaman</label>
    	<div class="col-sm-10">
      	<input type="pengalaman" class="form-control form-control-lg" id="colFormLabelLg" placeholder="web developer" name="pengalaman_2">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="judul" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Intelitec Solutions" name="judul_2">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="tanggal" class="form-control form-control-lg" id="colFormLabelLg" placeholder="desember 2012 - maret 2014" name="tanggal_2">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan_2" placeholder="ceritakan pengalaman anda ?"></textarea>
  </div>

  <hr color="black">
  <h3>education</h3>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">sekolah terakhir</label>
    	<div class="col-sm-10">
      	<input type="nama_sekolah" class="form-control form-control-lg" id="colFormLabelLg" placeholder="nama university" name="nama_sekolah">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="gelar" class="form-control form-control-lg" id="colFormLabelLg" placeholder="sarjana" name="gelar">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="tanggal_tamat" class="form-control form-control-lg" id="colFormLabelLg" placeholder="desember 2012 - maret 2014" name="tanggal_tamat">
    </div>
  </div>

  <div class="form-group row">
      <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
      <div class="col-sm-10">
        <input type="ipk" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ipk" name="ipk">
    </div>
  </div>

  <hr color="black">
  <h3>Awards & certifications</h3>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Penghargaan</label>
    	<div class="col-sm-10">
      	<input type="penghargaan" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Penghargaan" name="Penghargaan">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="penghargaan_2" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Penghargaan" name="penghargaan_2">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="penghargaan_3" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Penghargaan" name="penghargaan_3">
    </div>
  </div>

  <div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
    	<div class="col-sm-10">
      	<input type="penghargaan_4" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Penghargaan" name="penghargaan_4">
    </div>
  </div>

<button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
