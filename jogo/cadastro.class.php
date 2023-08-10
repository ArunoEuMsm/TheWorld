<?php

class cadastro{
	public function cadastrar($nome,$user,$senha,$confsenha,$email,$dia,$mes,$ano,$concordo,$info,$codigo){
		
		$nome=ucwords(strtolower($nome));
		$user=ucwords(strtolower($user));
		$senha=sha1($senha."theworld");
		$confsenha="1";
		
		//Inserção no banco de dados//
		
		$sql = "INSERT INTO cadastro (nome,usuario,senha,resenha,email,dia,mes,ano,concordo,receber,nivel,status,codigo)
          VALUES ('$nome','$user','$senha','$confsenha','$email','$dia','$mes','$ano','$concordo','$info',1,0,'$codigo')";
          
 

  $resultado = mysql_query($sql);	
    

   if ($resultado)    
   {
	  $flash="<h1 class=\"h1_cadastro\">Parabéns!</h1><p id=confirme>Cadastro bem sucedido, enviamos um link de ativação através do seu e-mail, favor confirmar para começar sua aventura no The World.<br><span class=textomenor><a href=\"#\" id=\"email\">Clique aqui</a> caso não tenha recebido o e-mail que enviamos. Não esqueça de conferir a lixeira.</span></p><br><a href=\"index.php\" style=\"text-decoration:none\"><div class=\"acesse\">Fechar e voltar</div></a><br>";
   }
   
   else
   {
	  $flash="<h1 class=\"h1_cadastro\">Oops!</h1><p id=confirme>Infelizmente houve um erro no cadastro. Favor tente novamente mais tarde, caso o problema persista, entre em contato conosco.</p><br><a href=\"index.php\" style=\"text-decoration:none\"><div class=\"acesse\" >Fechar e voltar</div></a><br>";
   }
   
   echo $flash;
	}
	
	
}

?>