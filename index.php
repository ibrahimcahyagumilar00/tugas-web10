<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP START -->
<?php
    $mahasiswa = [
        [
            "nama" => "Rizky",
            "nim" => "1234561",
            "jurusan" => "Teknik Informatika",
            "email" => "rizky@gmail.com",
            "nilai"=> 90,
        ],
        [
            "nama" => "Muhammad",
            "nim" => "1234562",
            "jurusan" => "Teknik Informatika",
            "email" => "muhammad@gmail.com",
            "nilai"=> 60,
        ],
        [
            "nama" => "Ahmad",
            "nim" => "1234563",
            "jurusan" => "Teknik Informatika",
            "email" => "ahmad@gmail.com",
            "nilai"=> 80,
        ],
    ];
    
?>
<!-- PHP END -->
<h2 style="text-align:center;">Data Mahasiswa</h2>
<table style="width: 100%; border: 1px solid black">
    <tr style="text-align: left; ">
        <th style="border: 1px solid black">Nama</th>
        <th style="border: 1px solid black">NIM</th>
        <th style="border: 1px solid black">Jurusan</th>
        <th style="border: 1px solid black">Email</th>
        <th style="border: 1px solid black">Nilai</th>
        <th style="border: 1px solid black">Status</th>
    </tr>
    <?php
        foreach ($mahasiswa as $mhs){
            echo "<tr>";
                echo" <td style='border: 1px solid black'>";
                    echo "<br>{$mhs['nama']}";
                echo "</td>";
                echo" <td style='border: 1px solid black'>";
                    echo "<br>{$mhs['nim']}";
                echo "</td>";
                echo "<td style='border: 1px solid black'>";
                    echo "<br>{$mhs['jurusan']}";
                echo "</td>";
                echo "<td style='border: 1px solid black'>";
                    echo "<br>{$mhs['email']}";
                echo "</td>";
                echo "<td style='border: 1px solid black'>";
                    echo "<br>{$mhs['nilai']}";
                echo "</td>";

                if ($mhs['nilai'] >= 80) {
                    echo "<td style='border: 1px solid black'>Lulus</td>";
                }
                else{
                    echo "<td style='border: 1px solid black'>Tidak lulus</td>";
                }
            echo "</tr>";
                } 
            ?>
    
</table>
</body>
</html>