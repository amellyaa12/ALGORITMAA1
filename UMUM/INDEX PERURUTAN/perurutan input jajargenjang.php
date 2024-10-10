<!DOCTYPE html>
<html lang="id">
<head>

    <title>Hitung Luas Jajar Genjang</title>
</head>
<body>
    <h1> Luas Jajar Genjang</h1>
    <h4>Selamat datang <strong style="-webkit-text-fill-color: blue; text-transform:uppercase">  </strong>di Program Project Perurutan Notasi Algoritma </h4>
    <table>
    <th>
    <td>
        <tr>menghitung luas jajargenjang:</tr>
    </td>
    </th>
    <tbody>
        <td>
            <tr>
                <?php

                if ($_GET) {
                    echo $_GET['nama'];
                    echo '  Dengan Email: ' . $_GET['email'];
                    $_GET['status'] = 'aktif';
                }

                ?>


            </tr>
        </td>
    </tbody>
</table>


    <form method="post" action="perurutan output jajargenjang.php">
        <label for="alas">Alas (a):</label><br>
        <input type="number" id="alas" name="alas" required>
        <br><br>
        <label for="tinggi">Tinggi (t):</label><br>
        <input type="number" id="tinggi" name="tinggi" required>
        <br><br>
        <input type="submit" value="Hitung Luas">
    </form>
</body>
<br><br><br><strong>By Amellya</strong>
</html>