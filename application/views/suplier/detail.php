<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail suplier</title>
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
              <li class="breadcrumb-item"><a href="#">Data suplier</a></li>
              <li class="breadcrumb-item active">Detail suplier</li>
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
        <h3 class="col-md-12">Detail suplier</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>nama</th>
                <th>kota</th>
                <th>kontak</th>
                <th>alamat</th>
                <th>telpon</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $suplier -> id ?></td>
                <td><?php echo $suplier -> nama ?></td>
                <td><?php echo $suplier -> kota ?></td>               
                <td><?php echo $suplier -> kontak ?></td>
                <td><?php echo $suplier -> alamat ?></td>
                <td><?php echo $suplier -> telpon ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url() ?>uploads/photos/<?=$suplier->id?>.jpg" width="300" alt="">
                    <div class="mt-5">
                        <h4><?=$suplier->nama?></h4>
                        <p>Foto suplier</p>
                        <!-- <?php echo $error;?> -->
                        <br>
                        <a href=""><button class="btn btn-outline-primary">Instagram</button></a>
                        <?php echo form_open_multipart("suplier/upload"); ?>
                            <input type="file" name="foto" size="300"/>
                            <br>
                            <input type="hidden" name="idsuplier" value="<?=$suplier->id?>"/>
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