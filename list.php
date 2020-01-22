<?php
include ('connection.php');

$query = mysqli_query($koneksi,"SELECT * FROM tblpasien");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<html>
<body>
    <a href="add.php">Tambah Data</a>
    <br>
    <br>
    <table border="1">
        <tr>
		
			
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
			<th>Umur</th>
            <th>Keluhan</th>
            <th>No Hp</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach($result as $result) : ?>
        <tr>
			
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['alamat']?></td>
            <td><?php echo $result['jenis_kelamin']?></td>
			<td><?php echo $result['umur']?></td>
            <td><?php echo $result['keluhan']?></td>
            <td><?php echo $result['no_hp']?></td>
            <td>
                <a href="edit.php?no_pasien=<?php echo $result['no_pasien']?>">Edit</a>
                <a href="delete.php?no_pasien=<?php echo $result['no_pasien']?>">Delete</a>
            </td>
    
                
        </tr>
        <?PHP endforeach; ?>
    </table>
</body>
</html>