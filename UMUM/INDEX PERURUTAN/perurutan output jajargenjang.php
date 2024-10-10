<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        // Mengambil input dari pengguna
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        
        // Menghitung luas jajar genjang
        $luas = $alas * $tinggi;
        
        // Menampilkan hasil

        
 echo "Hasil luas jajar genjang adalah=" . $luas;
    ?>

<p>
<a href="perurutan input jajargenjang.php">
      <button>Kembali ke Input</button>
</a>
</p>

<p>atau kembali ke : </p>
<a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
<br><br><br><i><strong>By:Amellya</strong>