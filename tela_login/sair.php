<?php

session_start();

        // se usuario nao registrado, redireciona p/ validacao

        if(unset($_SESSION['usu']))

                header("Location: index.php?");

 ?>