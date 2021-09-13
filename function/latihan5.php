<html>
    <head>
        <title>PANGKAT</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Input Bilangan</td>
                    <td>=</td>
                    <td><input name="bilangan" type="number" value=""/></td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td>=</td>
                    <td><input name="pangkat" type="number" value=""/></td>
                </tr>
                <tr>
                    <td><input name="submit" type="submit" value="SUBMIT"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if(isset ($bilangan))
                            echo $hasil;
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

if(isset($_POST['submit'])){
    $bil = $_POST['bilangan'];
    $pangkat = $_POST['pangkat'];

    function pangkat($bil, $pangkat)
{
    if($pangkat > 1) {
        return $bil * $pangkat($bil, $pangkat -1);
    }else{
        return $bil;
    }

}

function pangkatnya($bil,$pangkat)
{
    for ($i=1; $i <= $pangkat; $i++){
        echo $bil;
        if($i < $pangkat){
            echo " X ";
        }
    }
}
echo "hasil dari perkalian <br>";
echo pangkatnya($bil, $pangkat);
$hasil = pangkat($bil, $pangkat);
echo " = ". $hasil;
}