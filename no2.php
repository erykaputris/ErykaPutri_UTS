<?php
 $prov = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Taman",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Waru",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "kecamatan 2",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "kecamatan 2",
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
	  background-color: #DEB887;
	  color: white;
	}

	th, td {
	  padding: 8px;
	  text-align: left;
	  border-bottom: 1px solid #ddd;
      border: 1px solid black;
	}

	tr:hover {background-color:	#DEB887;}

</style>
<head>
	<title>Tugas Uts No 2</title>
</head>
<center>
<h2>Data Penduduk Surabaya 2022</h2>
</center>
<table border ="1" width = "1000" align = "center">
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