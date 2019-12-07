<?php 
	include_once 'view/admin/header.php';
	include_once 'view/admin/topmenu.php';
	include_once 'view/admin/footer.php';
 ?>
<div class="container-fluid">
	<h1>Form Tambah</h1>
	<hr color="black">
	<form action="insert.php" method="POST">
		<h3>Biodata</h3>
	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Depan</label>
    	<div class="col-sm-10">
      	<input type="firstname" class="form-control form-control-lg" id="colFormLabelLg" placeholder="firstname" name="firstname">
    </div>
  </div>

  	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Belakang</label>
    	<div class="col-sm-10">
      	<input type="lastname" class="form-control form-control-lg" id="colFormLabelLg" placeholder="lastname" name="lastname">
    </div>
  </div>

  	<div class="form-group row">
    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">email</label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="email" name="email">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">submit</button>
	</form>
</div>