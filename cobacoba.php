<?php
include_one ("koneksi.php");
$result = mysqli_query($koneksi, "SELECT * FROM siswa order by no desc")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table width="80%" border="1">
            <tr>
                <th>NO</th>
                <TH>NAMA</TH>
                <TH>KELAS</TH>
            </tr>
            <tr>
                <th>1</th>
                <TH>pino</TH>
                <TH>XRA</TH>
            </tr>
            <?php
            while ($user_data = mysql_fetch_array($result))
            echo 
        </table>
    </center>
</body>
</html>