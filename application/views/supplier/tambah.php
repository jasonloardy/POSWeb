<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Supplier
    <small>Data Supplier</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Supplier</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="box">

    <div class="box-body">

      <?php if($this->session->flashdata('msg')) { ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i><?= $this->session->flashdata('msg'); ?>
      </div>
      <?php } ?>

      <form action="" method="POST">
        <div class="form-group">
          <label>ID SUPPLIER :</label>
          <?php
            $id_supplier = 'SU' . str_pad(1 + substr($supplier['id_supplier'], 2), 6, '0', STR_PAD_LEFT);
          ?>
          <input type="text" class="form-control" value="<?= $id_supplier ?>" name="id_supplier" readonly>
        </div>
        <div class="form-group">
          <label>NAMA SUPPLIER :</label>
          <input type="text" class="form-control" name="nama_supplier" placeholder="Nama supplier">
        </div>
        <div class="form-group">
          <label>ALAMAT :</label>
          <input type="text" class="form-control" name="alamat" placeholder="Alamat">
        </div>
        <div class="form-group">
          <label>NO TELEPON :</label>
          <input type="text" class="form-control" name="no_telepon" placeholder="No Telepon">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
