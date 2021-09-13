<?php 
  if (isset($_POST['input'])) {
      $bilangan1 = $_POST['bilangan1'];
      $bilangan2 = $_POST['bilangan2'];
      $hasil =$bilangan1 + $bilangan2;
      $hasil2 =$bilangan1 - $bilangan2;
      $hasil3 =$bilangan1 * $bilangan2;
      $hasil4 =$bilangan1 / $bilangan2;
      echo "Bilangan $bilangan1 + Bilangan $bilangan2 = <b>$hasil</b>";
      $kurang =$bilangan1 - $bilangan2;
      echo "<br>Bilangan $bilangan1 - Bilangan $bilangan2 = <b>$hasil2</b>";
      $kali =$bilangan1 * $bilangan2;
      echo "<br>Bilangan $bilangan1 * Bilangan $bilangan2 = <b>$hasil3</b>";
      $bagi =$bilangan1 / $bilangan2;
      echo "<br>Bilangan $bilangan1 / Bilangan $bilangan2 = <b>$hasil4</b>";
  }
?>