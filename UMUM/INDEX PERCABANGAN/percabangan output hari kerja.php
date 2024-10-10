<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Mengambil input dari pengguna
        $hari = strtolower(trim($_POST['hari']));

        // Menggunakan percabangan untuk mengecek hari kerja
        if ($hari == "senin" || $hari == "selasa" || $hari == "rabu" || $hari == "kamis" || $hari == "jumat") {
            echo "<h2>$hari adalah Hari Kerja.</h2>";
        } elseif ($hari == "sabtu" || $hari == "minggu") {
            echo "<h2>$hari adalah Hari Libur.</h2>";
        } else {
            echo "<h2>Input tidak valid. Silakan masukkan nama hari yang benar.</h2>";
        }
    }

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

<p><br><i><strong>By Amellya</strong>