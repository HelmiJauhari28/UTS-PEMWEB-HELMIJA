<?php 
	$buku = array(
		
        array(
            "no" => "1",
            "judul" => "The Pragmatic Programmer",
		    "pengarang" => "Andrew Hunt and Dave Thomas",
		    "tahun" => 2019
		),
		array(
		    "no" => "2",
            "judul" => "Introduction to Algorithms",
		    "pengarang" => "Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein",
		    "tahun" => 2011
		),
		array(
            "no" => "3",
		    "judul" => "The Art of Computer Programming: Volume 1 Fundamental Algorithms",
		    "pengarang" => "Donald E. Knuth",
		    "tahun" => 2013
		)
	  );	  

?>

<!DOCTYPE html>
<html>
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
	  background-color: #808080;
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
<head>
	<title>Array Asosiatif</title>
</head>
<body>
    <center>
    <h1> Perpustakaan Helmi
    </h1>
    </center>
	<table align= "center">
		<tr>
			<th>Nomor</th>
			<th>Judul Buku</th>
			<th>Nama Pengarang</th>
			<th>Tahun Terbit</th>	
		</tr>
			<?php foreach ($buku as $buku) { ?>
				<tr>
					<td><?php echo $buku["no"]; ?></td>
					<td><?php echo $buku["judul"]; ?></td>
					<td><?php echo $buku["pengarang"]; ?></td>
					<td><?php echo $buku["tahun"]; ?></td>
				</tr>
			<?php } ?>
	</table>

</body>
</html>
