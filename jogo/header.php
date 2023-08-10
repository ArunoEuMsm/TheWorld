<?php

//Globais//

$startaction="";
$msg="Por favor preencha os campos abaixo";

if(isset($_GET["acao"])){
	$acao=$_GET["acao"];
	$startaction=1;
}


//Include das classes//
include("DB.class.php");
include("cadastro.class.php");
include("login.class.php");
include("email.class.php");


//Conexão com Banco de Dados//
$conectar=new DB;
$conectar=$conectar->conectar();


//Método de Cadastro//

if($startaction == 1){
if($acao== "cadastrar"){
		
  $nome = $_POST['nome'];
  $user = $_POST['user'];
  $senha = $_POST['senha'];
  $confsenha = $_POST['confsenha'];
  $email = $_POST['email'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $ano = $_POST['ano'];
  $concordo = $_POST['concordo'];
  $info = $_POST['info'];
  
  
  // Descobre que dia é hoje e retorna a unix timestamp 
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
   
// Descobre a unix timestamp da data de nascimento do fulano  
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
// Depois apenas fazemos o cálculo já citado 
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);


//Confirma se todos dados foram prenchidos, preucaução caso não haja HTML5//

if (empty($nome) || empty($user) || empty($senha) || empty($confsenha) || empty($email) || empty ($dia) || empty ($mes) || empty ($ano) || empty($email))
{
	$msg= "Favor prencher todos os campos.";
}
	
//Confirmação se Concorda com os Termos//	
	
else{if (empty($concordo))
	{
		$msg= "Você deve concordar com nossos termos.";
	}
		
//Verificação de Data e Idade//
		
else{$anohoje = date('Y');
	
	if ($anohoje < $ano)
    {
		$msg= "O ano informado é inválido.";
    }
 

else{if ($idade < 14){
		$msg=  "Você é muito novo!";
}

//Verifica a Confirmação de Senha//

else{if ($senha !== $confsenha){
	$msg=  "As senhas não coincidem.";
	}

//Confere o e-mail//

else {$email = trim(@$_REQUEST['email']);

	if ($email) 
	{
        if ((preg_match("/[A-Za-z0-9_.-]+@([A-Za-z0-9_]+\.)+[A-Za-z]{2,4}/i", $email)) <> 1)
		{
		$msg= "Endereço de E-mail Inválido.";   
		}
		
//Pesquisa por repetições de E-mail ou Usuário//
		
else{$search = mysql_query("SELECT * FROM cadastro WHERE usuario = '$user' ");
if(@mysql_num_rows($search) > 0)
{
    $msg = "Esse usuário já existe";
}

else{$search = mysql_query("SELECT * FROM cadastro WHERE email = '$email' ");
if(@mysql_num_rows($search) > 0)
{
    $msg = "Esse email já foi cadastrado";
}


//Gera código alfanumérico/

else{
	
	
	function uniqueAlfa($length=16)
{
 $salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 $len = strlen($salt);
 $pass = '';
 mt_srand(10000000*(double)microtime());
 for ($i = 0; $i < $length; $i++)
 {
   $pass .= $salt[mt_rand(0,$len - 1)];
 }
 return $pass;
}

$codigo= uniqueAlfa(6);
$conectar=new email;
$conectar=$conectar->enviaremail($codigo,$email);


	//Executa o Cadastro//
	$msg = "Campos prenchidos corretamente";
	$conectar=new cadastro;
	echo "<div class=\"sombra\">";
	echo "<div id=\"flash\">";
	$conectar=$conectar->cadastrar($nome,$user,$senha,$confsenha,$email,$dia,$mes,$ano,$concordo,$info,$codigo);
	echo "</div></div>";
}
}
}
}
}
}
}
}
}
	


}
}

//Método de Login//

if($startaction == 1){
if($acao== "logar"){
	//Dados//
	$email=$_POST["usuario"];
	$senha=sha1($_POST["senha"]."theworld");
	
	echo "<div class=\"sombra\">";
	$login=new login;
	$login=$login->logar($email,$senha);
	echo "</div>";
}
}

?>