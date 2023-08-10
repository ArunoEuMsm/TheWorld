$con = mysql_connect('localhost','root','');
 $db = mysql_select_db('theworld');
 
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
  $erro = 0;    

// Descobre que dia é hoje e retorna a unix timestamp 
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
   
// Descobre a unix timestamp da data de nascimento do fulano  
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
// Depois apenas fazemos o cálculo já citado 
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);


//Confirma se todos dados foram prenchidos, preucaução caso não haja HTML5//

if (empty($nome))
{
	echo "É importante informar seu nome completo";
	$erro = 1;
}
    
if (empty($user))
{
	echo "É importante criar o nome de usuário";
	$erro = 1;
}
    
if (empty($senha))
{
	echo "É importante ter uma senha";
	$erro = 1;
}

if (empty($confsenha))
{
	echo "É importante confirmar a senha";
	$erro = 1;
}

if (empty($email))
{
	echo "É Necessario o preenchimento do campo email";
	$erro = 1;
}

if (empty($concordo))
{
	echo "Você só pode acessar caso concorde com nossos termos!";
	$erro = 1;
}


//Confirmar Data de Nascimento//
    
if (empty ($dia))
{
	echo "Data de nascimento inválida";
	$erro = 1;
}

if (empty ($mes))
{
	echo "Data de nascimento inválida";
	$erro = 1;
}

if (empty ($ano))
{
	echo "Data de nascimento inválida";
	$erro = 1;
}

$anohoje = date('Y');

if ($anohoje < $ano)
    {
	echo "Pessoas do futuro não podem jogar este jogo!";
	$erro = 1;
    }


if ($idade < 14)
{
	echo "Você é muito novo para estar jogando isso!";
	$erro = 1;
}
    

//Confirmar Senha//

if ($senha == $confsenha)
    {}
    else
    {
        echo "As senhas não coincidem, favor corrigir";
        $erro = 1;
    }



//Conferir Email//


if (empty($email))
{
	echo "É Necessario o Preenchimento do campo email";
	$erro = 1;
}
else
{
	$email = trim(@$_REQUEST['email']);

	if ($email) 
	{
        if ((preg_match("/[A-Za-z0-9_.-]+@([A-Za-z0-9_]+\.)+[A-Za-z]{2,4}/i", $email)) <> 1)
		{
		echo "Endereço de E-mail Inválido.";
		$erro = 1;		   
		}
     }
}



//Conferir Repetições//

$search = mysql_query("SELECT * FROM cadastro WHERE usuario = '$user' ");
if(@mysql_num_rows($search) > 0)
{
    echo 'Esse usuário já existe';
    $erro = 1;
}

$search = mysql_query("SELECT * FROM cadastro WHERE email = '$email' ");
if(@mysql_num_rows($search) > 0)
{
    echo 'Esse email já foi cadastrado';
    $erro = 1;
}


//Analisar Possíveis Erros//


if ($erro <> 0)
{
	echo '<h1>Erro no Formulário</h1>';
	echo '<h1>Favor corrigir.</h1>';
}


else
{
  $sql = "INSERT INTO cadastro (nome,usuario,senha,resenha,email,dia,mes,ano,concordo,receber,idade)
          VALUES ('$nome','$user','$senha','$confsenha','$email','$dia','$mes','$ano','$concordo','$info','$idade')";
          
 

  $resultado = mysql_query($sql);	
    

   if ($resultado)    
   {
	   echo "Dados cadastrados com sucesso !!!! <br><br>";   
   }
   else
   {
	   echo "Desculpe, ocorreu um erro na gravacao dos dados... <br><br>";
   }
   
}