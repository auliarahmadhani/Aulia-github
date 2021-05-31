<html>
<head>
    <meta http-equiv="Content-Type"
    content="text/html; charset=utf-8" />
    <title> INPUT DATA </title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <style type= "text/css">
h1 {
    margin-top : 140px;
    padding: 15px 15px;
    color: black;
    }

    body{
        text-align: center;
        background : url('bg2.jpg');
    }

    table {
    color : black;
    border-collapse: collapse;
    margin: 25px 0 ;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0,0,0,0.8);
    background : transparent;
    display:flex;
    }

    .input{
        color : black;
        display : flex;
        background : transparent;
        border : 0;
        border-bottom : 2px solid black;
        margin : 10px; 
        text-align : center;
    }

    Table tr td {
    padding: 12px 15px;
    text-align: left;
    } 

    Table tr td {
    border-bottom: 1px solid #dddddd;
    }


    .btn{
        background : #cecfcf;
        text-align: center ;
        padding : 15px;
        border-radius : 5px;
        color :#000000;
        cursor : pointer;
        text-transform : uppercase;
        width : 40%;

    }
 </style>

</head>

<body>
<?php
  include'Latihan_Database.php';
  $db= new database();
?>
<h1> DATA MAHASISWA</h1>
<form action="Latihan_Proses.php?aksi=tambah" method="post">
<table>
    <tr>
        <td>Nama </td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Program Pendidikan</td>
        <td>
        <select name="prodi">
             <option value="">Pilih Program Pendidikan</option>
             <option value="PROGRAM REGULER D-III & D-IV">PROGRAM REGULER D-III & D-IV</option>
             <option value="PROGRAM MAGISTER">PROGRAM MAGISTER</option>
             <option value="PROGRAM NON REGULER SLTA KE D-III">PROGRAM NON REGULER SLTA KE D-III</option>
             <option value="PROGRAM ALIH JEJANG D-II KE D-IV">PROGRAM ALIH JEJANG D-II KE D-IV</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Email </td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>
