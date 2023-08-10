<?php
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    $connect = mysql_connect('localhost','root','');

    $db = mysql_select_db('theworld');


             
       $verifica = mysql_query("SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'");
       $res = mysql_query($verifica);

        
       if ($res)
      { $verifica = mysql_query("SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'");       
        $res = mysql_query($verifica);

           if ($res)
            {  
                    echo"<script language='javascript' type='text/javascript'>
					alert('Login e/ou senha incorretos');
                    window.location.href='menu.php';</script>";
                    die();
                }
				else{
                    setcookie("login",$login);
                    header("Location:usuarios.php");
                }
        }
        else{
                    setcookie("login",$login);
                    header("Location:comojogar.html");
                }
    
?>


