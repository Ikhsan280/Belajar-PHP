<?php
        if(isset($_POST['save'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            
            echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Jari-jari lingkaran = $jari<br />";
            echo "Phie = $phie<br />";
            echo "Maka luas lingkaran sama dengan [ $phie x $jari x $jari ] = $luas_lingkaran";
        }
    ?>