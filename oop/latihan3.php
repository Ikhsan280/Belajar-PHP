<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama kucing</title>
</head>
<body>
    <fieldset>
        <legend>kucing</legend>
        <form action="" method="post">
            <table>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki</td>
                <td> : </td>
                <td><input type="number" name="kaki" id="" min = "3"></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Masuk">
                    <input type="reset" name="reset" value="Hapus"></td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];

    class kucing
    {
        public $warna;
        public $kaki;

        public function meow($warna, $kaki)
        {
            if ($kaki == 4) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan : Normal";
            } else if ($kaki == 3) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan : Cingked";
            } else if ($kaki >= 5) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan : Siluman";
            }
        }
    }
    $kucing = new kucing();
    echo $kucing->meow($warna, $kaki);
}
?>