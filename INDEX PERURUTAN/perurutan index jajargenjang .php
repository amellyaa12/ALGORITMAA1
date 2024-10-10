<!DOCTYPE html>
<html>
<body>
    <h2>INDETIFIKASI PENGGUNA</h2>
<form method="POST" action="perurutan input jajargenjang.php">
    Username :<br>
   <input type="text" name="nama" required><br>
   Email :<br>
   <input type="text" name="email" required><br>
   <br><input type="submit" name="submit" value="submit"><br>

</form>

<?php
if ($_POST)
{
    echo 'Nama: ' . $_POST['nama'];
    echo '<br>';
    echo 'Email: ' . $_POST['email'];
}

echo "<p><i><strong>By Amellya</strong>";
?>

</body>
</html>