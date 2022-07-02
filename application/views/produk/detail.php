<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
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
              <li class="breadcrumb-item"><a href="#">Data Produk</a></li>
              <li class="breadcrumb-item active">Detail Produk</li>
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
        <h3 class="col-md-12">Detail Produk</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Foto</th>
                <th>Jenis_id</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $produk -> id ?></td>
                <td><?php echo $produk -> kode ?></td>
                <td><?php echo $produk -> nama ?></td>               
                <td><?php echo $produk -> stok ?></td>
                <td><?php echo $produk -> harga_beli ?></td>
                <td><?php echo $produk -> harga_jual ?></td>
                <td><?php echo $produk -> foto ?></td>
                <td><?php echo $produk -> jenis_id ?></td>
                <td><?php echo $produk -> deskripsi ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url() ?>uploads/photos/<?=$produk->id?>.jpg" width="300" alt="">
                    <div class="mt-5">
                        <h4><?=$produk->nama?></h4>
                        <p>Foto Produk</p>
                        <!-- <?php echo $error;?> -->
                        <br>
                        <a href=""><button class="btn btn-outline-primary">Instagram</button></a>
                        <?php echo form_open_multipart("produk/upload"); ?>
                            <input type="file" name="foto" size="300"/>
                            <br>
                            <input type="hidden" name="idproduk" value="<?=$produk->id?>"/>
                            <input type="submit" value="Upload Foto" class="btn btn-outline-info"/>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 
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
    
</body>
</html>