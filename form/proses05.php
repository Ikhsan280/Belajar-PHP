<?php

    if(isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass =$_POST['password'];
        if ($user == "kardi" && $pass == "123"){
            echo "<h2>Login berhasil</h2>";
        } else {
            echo "<h2>Login gagal</h2>";
        }
    }

?>