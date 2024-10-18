<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabel Dosen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <tr>
                <th>Data</th>
                <th>Keterangan</th>
            </tr>
            <?php
                $Dosen = [
                    'nama' => 'Luqman Ananta Abdul Hakim',
                    'domisili' => 'Malang',
                    'jenis_kelamin' => 'Lakik'
                ];

                echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
                echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
                echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
            ?>
        </table>
    </body>
</html>
