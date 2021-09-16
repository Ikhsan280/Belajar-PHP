<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Aritmatika</legend>
            <table>
                <tr>
                    <td>Bilangan 1 </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan1"></td>
                </tr>
                <tr>
                    <td>Bilangan 2 </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan2"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
<?php 
if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
   }
class Aritmatika{
    public function __construct($bilangan1,$bilangan2){
        $this-> bilangan1 = "$bilangan1";
        $this-> bilangan2 = "$bilangan2";
        $tambah =$this-> bilangan1 +$this-> bilangan2;
    }
    public function tambah()
        {
            
            return ($this->bilangan1 + $this->bilangan2 );
        }
        public function pengurangan()
        {
            return ($this->bilangan1 - $this->bilangan2 );
        }
        public function perkalian()
        {
            return ($this->bilangan1 * $this->bilangan2 );
        }
        public function pembagian()
        {
            return ($this->bilangan1 / $this->bilangan2 );
        }
        public function modulus()
        {
            return ($this->bilangan1 % $this->bilangan2 );
        }




    }
$hasil = new aritmatika($bilangan1,$bilangan2);
echo "Perjumlahan <br>";
echo "Bilangan 1: ".$hasil->bilangan1 . "<br>";
echo "Bilangan 2: ".$hasil->bilangan2 . "<br>";
echo "Hasil : ".$hasil->tambah()  . "<br><br>";

echo "pengurangan <br>";
echo "Bilangan 1: ".$hasil->bilangan1 . "<br>";
echo "Bilangan 2: ".$hasil->bilangan2 . "<br>";
echo "Hasil : ".$hasil->pengurangan()  . "<br><br>";

echo "Perkalian <br>";
echo "Bilangan 1: ".$hasil->bilangan1 . "<br>";
echo "Bilangan 2: ".$hasil->bilangan2 . "<br>";
echo "Hasil : ".$hasil->perkalian()  . "<br><br>";

echo "Modulus atau Sisa bagi <br>";
echo "Bilangan 1: ".$hasil->bilangan1 . "<br>";
echo "Bilangan 2: ".$hasil->bilangan2 . "<br>";
echo "Hasil : ".$hasil->modulus()  . "<br><br>";