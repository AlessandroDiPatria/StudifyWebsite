<?php
    session_start();

        $nome=$_POST['nome'];
        $cognome=$_POST['cognome'];
        $universita=$_POST['uni'];
        $corso=$_POST['corso'];
        $twitter=$_POST['twitter'];
        $instagram=$_POST['instagram'];
        $facebook=$_POST['facebook'];
        $sito=$_POST['sito'];
        $user=$_POST['username'];

        $_SESSION['nome']=$nome;
        $_SESSION['cognome']=$cognome;
        $_SESSION['universita']=$universita;
        $_SESSION['corso']=$corso;
        $_SESSION['twitter']=$twitter;
        $_SESSION['instagram']=$instagram;
        $_SESSION['facebook']=$facebook;
        $_SESSION['sito']=$sito;
        $_SESSION['username']=$user;

        header("Location: profile.php");
?>

                    