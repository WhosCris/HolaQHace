<?php
    function Conectar()
    {
        if(!($cnn = mysqli_connect("127.0.0.1","root",""))){
            exit();
        }
        if(! mysqli_select_db($cnn,"registroclientes")){
            exit();
        }
        return $cnn;
    }
?>