<html>
<header>
<title>Tambah DataXX</title>
</header>
<body>

    <form action="insert.php" method="post">
       

        <label>No_pasien</label><br>
        <input type="text" name="nama"/>
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama"/>
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" cols="30" rows="10"></textarea>
        <br><br>

        <label>Jenis kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br><br>

       <label>Umur</label><br>
       <input type="text" name="umur"/>
       <br><br>

       <label>Keluhan</label> <br>
       <input type="text" name="keluhan"/>
       <br><br>

        <label>No Hp</label> <br>
       <input type="text" name="no_hp"/>
       <br><br>

       <td><input type="submit" name="submit" value="SIMPAN"></td>
    </form>
    </body>
</html>
