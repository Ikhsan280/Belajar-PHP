<?php

    echo"<hr>";
$nilai = 60;
if($nilai >= 90){
	$grade = 'A';
}

else if ($nilai >= 80){
	$grade = 'B';
	
}

else if ($nilai >= 70){
	$grade = 'C';
	
}
else if ($nilai >= 60){
	$grade = 'D';
	
}
else if ($nilai < 60){
	$grade = 'E';
	
}
else{
	echo "Anda tidak mengikuti pelajaran";
}
    

    switch ($grade){
        case 'A' : $comen = "pertahankan"; break;
        case 'B' : $comen = "harus lebih baik lagi"; break;
        case 'C' : $comen = "perbanyak belajar"; break;
        case 'D' : $comen = "jangan keseringan main"; break;
        case 'E' : $comen = "kebanyakan bolos"; break;
        default  : $comen = "not found"; break;
    }
    echo "nilai : $nilai</b> <br>";
    echo "grade : $grade</b> <br>";
    echo "keterangan : $comen";
?>