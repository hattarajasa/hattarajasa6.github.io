<!doctype html>
<html lang="en">
  <head>
  <DIV class="head">
  <h1 align = "center">PENDATAAN OPERASI</h1></DIV>
    <title>hatta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
body{
width:auto;
margin:auto;
height:610px;
background:linear-gradient(50deg, #F4A261,#E76F51); 
padding-right: :15px;
padding-left:15px;
padding-top: 15px;
padding-bottom: 15px; 
}

.head{
width: auto;
height: auto;
margin: auto;
background:linear-gradient(50deg, #FFB997,#F67E7D);
padding: auto;
}
/* .table{

  background-repeat: repeat;
} */
</style>
  </head>
  <body >
  <DIV class="body" </DIV>

  <?php require_once'database.php';?>
  
  
  </div>
  <?php
    $mysqli = new mysqli('localhost','root','','hatta')or die (mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM hospital")or die ($mysqli->error);

    ?>
    
    <div>
    <table class = "table">
    <thead>
    <tr>
    <th>Nama</th>
    <th>Jenis Operasi</th>
    <th>Tanggal Operasi</th>
    <th colspan = "2">  </th>
    </tr>
    </thead>
    <?php
        while ($row = $result -> fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row ['namabarang']; ?></td>
    <td><?php echo $row ['jenisbarang']; ?></td>
    <td><?php echo $row ['tanggal']; ?></td>
    <td>
    <a href="index.php?edit=<?php echo $row['id']; ?>"
    class = "btn btn-info">Ubah</a>
    <a href="database.php?delete=<?php echo $row ['id'] ?>"
    class = "btn btn-danger">Hapus</a>
    </td>
    <?php endwhile; ?>
    </tr>

    </table>
    </div>
  <div class = "container">
  <div class ="row justify-content-center">
    <form action ="database.php"method ="POST">
    <input type = "hidden" name = "id" value = "<?php echo $id?>">
    <table>
    <tr>
    <div class = "form-group">
    <td><label align = "center">Nama </label></td>
    <td><label align = "center"> : </label></td>
    <td><input type="text" name="namabarang" placeholder="Masukkan Nama Pasien" class="form-control" required></td>
    <tr>
    <tr>
    <div class = "form-group">
    <td><label align = "center"> Jenis Operasi </label></td>
    <td><label align = "center"> : </label></td>
    <td><input type ="text" placeholder ="Masukkan Jenis Operasi" name="jenisbarang" class = "form-control"></td>
    <tr>
    <tr>
    <div class = "form-group">
    <td><label align = "center"> Tanggal Operasi </label></td>
    <td><label align = "center"> : </label></td>
    <td><input type="date" name="tanggal"  class="form-control" required></td>
    <tr>
    <tr>
    <div class = "form-group">
    <td></td>
    <td></td>
    <?php
    if ($update == true):
      ?>
    <td><button type="submit" name="update"class = "btn btn-primary" placeholder="Masukkan jenisbarang" class="form-control">Kirim Update</td>
    <?php endif ?>
    
    <td><button type="submit" name="submit" class = "btn btn-primary" placeholder="Masukkan jenisbarang" class="form-control" >Kirim</td>
    
    <tr>
    </div>
    </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
  </body>
</html>

