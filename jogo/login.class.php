<?php
	class login{
		public function logar ($email,$senha){
			$aprovado=1;
			$erro=0;
			if(empty ($email) || empty ($senha)){
				$msg="Preencha todos os campos";
				$erro=1;
			}
			else{
				$verifica = mysql_query("SELECT * FROM usuarios WHERE usuario = '$email' AND senha = '$senha'");
       			$res = mysql_query($verifica);
					if ($res){
					$verifica = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");       
                	$res = mysql_query($verifica);
		    			if ($res){  
               			$msg="Usuário ou Senha inseridos são incorretos ou inexistentes";
						$erro=1;
               			}
						else{$verifica=mysql_query("SELECT * FROM usuarios WHERE status ='$aprovado'");
							if ($res){
							$msg="O e-mail deste usuário ainda não foi confirmado, clique aqui para re-enviar o e-mail de confirmação";
							$erro=1;
							}
							else{
							$dados=mysql_fetch_array($verifica);
							$_SESSION["email"]=$dados["email"];
							$_SESSION["senha"]=$dados["senha"];
							$_SESSION["nivel"]=$dados["nivel"];
							setcookie("logado",1);
							}
						    }
					}
					else{$verifica=mysql_query("SELECT * FROM usuarios WHERE status ='$aprovado'");
							if ($res){
							$msg="O e-mail deste usuário ainda não foi confirmado, clique aqui para re-enviar o e-mail de confirmação";
							$erro=1;
							}
							else{
							$dados=mysql_fetch_array($verifica);
							$_SESSION["usuario"]=$dados["usuario"];
							$_SESSION["senha"]=$dados["senha"];
							$_SESSION["nivel"]=$dados["nivel"];
							setcookie("logado",1);
							
						 	
							}
					}
			}
			
echo "<div id=\"flash\"><div id=\"msg\"> $msg </div></div>";
		
	}	
}


?>