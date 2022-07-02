  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <h1>Form Edit suplier</h1>
        <?php
            $hidden = ['idedit'=>$obj_suplier->id];
        ?>
        <?php echo form_open("suplier/save","",$hidden) ?>
        
   
        <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">nama :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-qrcode"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama" type="text" value="<?php echo $obj_suplier->nama?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kota" class="col-4 col-form-label">kota :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                    </div> 
                    <input id="kota" name="kota" type="text" value="<?php echo $obj_suplier->kota?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kontak" class="col-4 col-form-label">kontak :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-hourglass-2"></i>
                    </div>
                    </div> 
                    <input id="kontak" name="kontak" type="text" value="<?php echo $obj_suplier->kontak?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">alamat :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-money"></i>
                    </div>
                    </div> 
                    <input id="alamat" name="alamat" type="text" value="<?php echo $obj_suplier->alamat?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="telpon" class="col-4 col-form-label">telpon :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-money"></i>
                    </div>
                    </div> 
                    <input id="telpon" name="telpon" type="text" value="<?php echo $obj_suplier->telpon?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->