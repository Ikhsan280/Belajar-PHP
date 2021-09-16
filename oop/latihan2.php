<?php

    class gmail
    {
        protected $mail = "ikhsan123ramadan@gmail.com";
        protected $notel = "0812379732";
        private $pass ="MarakanHelaAtuh";
     
        public function mail()
        {
            return $this -> mail;
        }
        public function notel()
        {
            return $this -> notel;
        }
        private function pass()
        {
            return $this -> pass;
        }

    }

$mail = new gmail();

echo "Gmail : " . $mail -> mail() . "<br>";
echo "No Telepon : " . $mail -> notel() ."<br>";
echo "Password : " . $mail -> pass() ."<br>";
echo "<hr>";