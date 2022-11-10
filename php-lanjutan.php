<?php
$nama = "Lisa";

/*
echo $nama;
echo "<b/>";
*/

/*
$no = 10;
for {$i=0; $i<$no; $i++} {
    echo $i+1." ".$nama."<br/>
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no);

 
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');
$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}

 echo $data[5];

foreach($data as $value) {
    echo $value."<br>";
}
*/

//PERCABANGAN

/*
if ($nama = "Lisa") {
    echo $nama."adalah orang Surabaya";
} else if ($nama = "Sintha") {
    echo $nama."berasal dari pulau jawa";

} else {
    echo $nama."darimana ya?";

}
*/
/*
switch ($nama) {
    case "Lisa":
        $pesan = $nama." adalah orang Surabaya";
    break;
    case "Sintha":
        $pesan = $nama." berasal dari pulau Jawa";
    break;

    default:
        $pesan = $nama." darimana ya?";

}
   echo $pesan;
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Lisa":
                    $pesan = $_POST['nama']." adalah orang Surabaya";
                break;
                case "Sintha":
                    $pesan = $_POST['nama']." berasal dari pulau Jawa";
                break;
                default:
                    $pesan = $_POST['nama']." darimana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>