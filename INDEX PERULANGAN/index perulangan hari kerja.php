<!DOCTYPE html>
<html>
<body>
    <h2>MENGULANG HARI KERJA</h2>
<form method="POST" action="output perulangan hari kerja.php">
    Cari: <input type="text" name="query"><br>
  <br><input type="submit" value="Submit">
</form>
</body>
</html>

<p><strong>By Amellya</strong>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
  echo "<h2>Data yang Dimasukkan:</h2>";
  for ($i = 1; $i <= $jumlah_input; $i++) { 
      $input_name = 'input' . $i;
      if (isset($_GET[$input_name])) {
          echo "Input $i: " . htmlspecialchars($_GET[$input_name]) . "<br>";
      }
  }

}
?>
