<?php

error_reporting(0);

include "./SpreadsheetReader.php";

$reader = new SpreadsheetReader('Soal5.xlsx');
$sheets = $reader->Sheets();

$ambil_sheet = 0;
$reader->ChangeSheet($ambil_sheet); ?>

<style>
    	th {
	  background-color: #2C3E50;
	  color: white;
        }

    table, th, td {border:1px solid black}
    th, td {
        padding:5px
	  border-bottom: 1px solid #ddd;
      border: 1px solid black;}
</style>

<center>
    <h1> Data Mahasiswa
    </h1>
    </center>
	<table align= "center">
    <tr>
        <th width="60">
            <b>NO</b>
        </th>
        <th width="100">
            <b>NIM</b>
        </th>
        <th width="200">
            <b>NAMA</b>
        </th>
        <th width="90">
            <b>JENIS KELAMIN</b>
        </th>
        <th width="200">
            <b>PROGRAM STUDI</b>
        </th>
        <th width="130">
            <b>ALAMAT</b>
        </th>
        <th width="75">
            <b>KOTA</b>
        </th>
        <th width="65">
            <b>EMAIL</b>
        </th>
    </tr>
    <?php foreach($reader as $i => $kolom):
        if ($i == 0 || (empty($kolom[0]) && empty($kolom[1]) && empty($kolom[2])))
            continue ?>
            <tr>
                <th><?=$kolom[0]?></th>
                <td><?=$kolom[1]?></td>
                <td><?=$kolom[2]?></td>
                <td><?=$kolom[3]?></td>
                <td><?=$kolom[4]?></td>
                <td><?=$kolom[5]?></td>
                <td><?=$kolom[6]?></td>
                <td><?=$kolom[7]?></td></tr>
    <?php endforeach ?>
</table>