<htmlxmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DATA MAHASISWA</title>
    <style type= "text/css">
    

  .auliabpwl {
            font-family : sans-serif; 
            color : black;
            border-collapse : collapse;
            width : 50%;
            border : 1px solid black;
            margin-bottom : 50px;
            margin-top :50px;

  }
  .aulia{
     color : black; 
     margin-top : 150px;
  }
  body{
    background : url('bg4.jpeg');
    background-repeat: no-repeat;
    position: fixed;
    width: 100%;
    height: 125%;
    background-size: 110%;
  }
  .auliabpwl tr td{
            padding : 8px 20px;
            text-align : center;
  }
  .y{
      color : white;
  }
  .btn{
      background : brown;
        text-align: center ;
        padding : 15px;
        border-radius : 5px;
        color :#000000;
        cursor : pointer;
        text-transform : uppercase;
        width : 25%;
  }

  .tambahdata {
      color : black;
  }
  </style>

  </head>
  <body>
      <center>            
<tr>
<?php
  include'Latihan_Database.php';
  $db= new database();
?>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<h1>DATA MAHASISWA</h1>
<a href="Latihan_Input.php" >Input Data</a>
<!--<table border="1"  -->
<table class="table">
  <tr>
  <tr class="table-primary" >
    <th>No</th>
    <th>Nama</th>
    <th>Program Pendidikan</th>
    <th>Email</th>
    <th>Opsi</th>
  </tr>
<?php
    $no=1;
    foreach($db->tampil_data() as $x){
?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $x['nama']; ?></td>
      <td><?php echo $x['prodi']; ?></td>
      <td><?php echo $x['email']; ?></td>
      <td>
        <a href="Latihan_Edit.php?id=<?php echo $x['id'];?>&aksi=edit"> Edit</a> <a>||</a>
        <a href="Latihan_Proses.php?id=<?php echo $x['id'];?>&aksi=hapus" > Hapus</a>
      </td>
    </tr>
    <?php
    }
    ?>
    </body>