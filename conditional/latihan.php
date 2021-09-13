<?php

    echo"<hr>";
$nilai = 95;
if($nilai >= 90){
	echo "nilai anda $nilai . (A)";
}

else if ($nilai >= 80){
	echo "nilai anda $nilai . (B)";
}

else if ($nilai >= 70){
	echo "nilai anda $nilai . (C)";
}
else if ($nilai >= 80){
	echo "nilai anda $nilai . (D)";
}
else if ($nilai < 70){
	echo "nilai anda $nilai . (E)";
}
else{
	echo "Anda tidak mengikuti pelajaran";
}
    echo "<hr>";

    $nilai = 10;
    switch ($nilai)
    {
        case ($nilai >= 90) :
            echo 'Pertahankan <br/>';
            break;
       
        case ($nilai >= 80) :
            echo 'Harus lebih baik lagi<br/>';
            break;
       
        case ($nilai >= 70) :
            echo 'perbanyak belajar';
            break;
       
        case ($nilai >= 60) :
            echo 'jangan keseringan main<br/>';
            break;
       
        case ($nilai < 60) :
            echo 'kebanyakan bolos<br/>';
            break;
                        
        default : 
            echo 'format tidak sesuai';
    }
    

?>