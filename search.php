<?php
include ('connection.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect,"SELECT * FROM tblpasien WHERE name ='$keyword'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<body>
    <a href="add.php">Tambah Data</a>
    <br/><br/>
    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="keyword .." value="<?php echo $_GET['keyword']?>"/>
        <button type="submit">search</button>
    </form>
    </br>

    <table border="1">
        <tr>
           <th>no_pasien</th>
           <th>nama</th>
           <th>alamat</th>
           <th>jenis_kelamin</th>
           <th>umur</th>
           <th>keluhan</th>
           <th>no_hp</th>
        </tr>
     <?php foreach($results as $result) : ?>
     <tr>
      <td><?php echo $result['no_pasien']?></td>
      <td><?php echo $result['nama']?></td>
      <td><?php echo $result['alamat']?></td>
      <td><?php echo $result['jenis_kelamin']?></td>
      <td><?php echo $result['umur']?></td>
      <td><?php echo $result['keluhan']?></td>
      <td><?php echo $result['no_hp']?></td>
        <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
        <a href="delete.php?id=<?php echo $result['id']?>">Delete</a>
      </td>
     </tr>
    <?PHP endforeach; ?>
    </table>
</body>
</html>