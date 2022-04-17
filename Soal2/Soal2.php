<?php
 $prov = array(
    array(
      "provinsi" => "Sulawesi Tengah",
      "kabupaten" => "Banggai Laut",
      "kecamatan" => "Labobo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Poso",
        "kecamatan" => "Lage",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sigi",
        "kecamatan" => "Lindu",
    ),
    array(
        "provinsi" => "Sulawesi Tengah",
        "kabupaten" => "Kota Palu",
        "kecamatan" => "Tatanga",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Banyumas",
        "kecamatan" => "Baturaden",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Boyolali",
        "kecamatan" => "Ampel",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Magelang",
        "kecamatan" => "Dukun",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Klaten",
        "kecamatan" => "Jatinom",
    ),
  );
  
?>
<style type="text/css">
	.clear {
		clear: both;
	}

	table {
        margin-top: 100px;
	  border-collapse: collapse;
	  width: 50%;
      border: 1px solid black;
	}

	th {
	  background-color: #22577E;
	  color: white;
	}

	th, td {
	  padding: 8px;
	  text-align: left;
	  border-bottom: 1px solid #ddd;
      border: 1px solid black;
	}

	tr:hover {background-color:#2FA4FF;}

</style>
<center>
<h2>Berikut Data Kependudukan
</h2>
</center>
<table border ="1" width = "900" align = "center">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kabupaten</th>
      <th scope="col">Kecamatan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no =1;
    foreach($prov as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['provinsi']."</td>
      <td>".$b['kabupaten']."</td>
      <td>".$b['kecamatan']."</td>";
      echo "</tr>";
      $no++;
    }
    ?>
  </tbody>
</table>