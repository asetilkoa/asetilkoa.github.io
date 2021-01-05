<?php
require_once('koneksi.php');
session_start();
if(!isset($_SESSION['userlogin'])){
header("Location: home.php");
}
if(isset($_GET['logout'])){
session_destroy();
unset($_SESSION);
header("Location: index.php");
}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home Page</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Dashboard Database</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav justify-content-end" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php?logout=true">Logout
              <span class="sr-only"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <table id="table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Mahasiswa</td>
                        <td>Alamat</td>
                        <td>Jurusan</td>
                        <td>Jenis Kelamin</td>
                        <td>Tanggal Masuk</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'koneksi.php';
                    $no =1;
                    $select=$db->prepare("SELECT * FROM tbl_mahasiswa_search");
                    $select->execute();
                    while($hasil=$select->fetch()){
                     ?>
                    <tr style="text-align: center;">
                        <td><?php echo $hasil['id'] ?></td>
                        <td><?php echo $hasil['nama_mahasiswa'] ?></td>
                        <td><?php echo $hasil['alamat'] ?></td>
                        <td><?php echo $hasil['jurusan'] ?></td>
                        <td><?php echo $hasil['jenis_kelamin'] ?></td>
                        <td><?php echo $hasil['tgl_masuk'] ?></td>
                    </tr>
                     <?php } ?>
                </tbody>
                <script>
                $(document).ready(function(){
                 $('#example1').DataTable();
                });
                </script>           
            </table>
  </div>
  <footer class="py-5 bg-dark">
  </footer>
</body>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="DataTables/js/jquery.dataTables.min.js"></script>
  <script src="DataTables/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function(){
    $('table').DataTable();
    });
   </script>
</html>