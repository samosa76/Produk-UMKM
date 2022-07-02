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
        <h1>Form Edit Produk</h1>
        <?php
            $hidden = ['idedit'=>$obj_produk->id];
        ?>
        <?php echo form_open("produk/save","",$hidden) ?>
   
        <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-qrcode"></i>
                    </div>
                    </div> 
                    <input id="kode" name="kode" type="text" value="<?php echo $obj_produk->kode?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Produk :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama" type="text" value="<?php echo $obj_produk->nama?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok Produk :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-hourglass-2"></i>
                    </div>
                    </div> 
                    <input id="stok" name="stok" type="text" value="<?php echo $obj_produk->stok?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-money"></i>
                    </div>
                    </div> 
                    <input id="harga_beli" name="harga_beli" type="text" value="<?php echo $obj_produk->harga_beli?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">Harga Jual :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-money"></i>
                    </div>
                    </div> 
                    <input id="harga_jual" name="harga_jual" type="text" value="<?php echo $obj_produk->harga_jual?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-4 col-form-label">Foto :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-image"></i>
                    </div>
                    </div> 
                    <input id="foto" name="foto" type="file" value="<?php echo $obj_produk->foto?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_id" class="col-4 col-form-label">Id Jenis</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-barcode"></i>
                    </div>
                    </div> 
                    <select id="jenis_id" name="jenis_id" class="form_control">
                            <?php include "config.php"; 
                            $result = mysqli_query($connect, "SELECT * FROM jenis_produk");
                            while ($row = mysqli_fetch_array($result))
                            { ?>
                            <option value="<?php echo $row[0]?>">
                            <?php echo $row[0]?>
                            </option>
                            <?php } ?>
                        </select>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi :</label> 
                <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" value="<?php echo $obj_produk->deskripsi?>" class="form-control"></textarea>
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