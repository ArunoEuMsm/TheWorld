<!DOCTYPE html>
<html lang="pt-br">

<head><title>The World | Cadastro</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta name="author" content="The World" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html;charset=ANSI"/> 
    <meta name="description" content="O Site de RPG de Mesa Online"/>
    <meta name="keywords" content="RPG, mesa, Rpg de Mesa, jogo, medieval, mundo, aventura, diversão, batalha, game, online, cadastro"/>    

<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
//Include//
include("jogo/header.php");
 ?>
  
</head>

<body>
    
    <!- – Área de Cadastro – ->
    
    <div id="fundo_cadastro">
        <div id="cadastro">
            <h3 class="h3">Dados de Cadastro</h3>
            <div id="formulario">
            <form name="cadastro" method="POST" action="?acao=cadastrar">
            <div id="principal">
            	<div class="juntarcampos">
            	<div id="msg">
				<?php echo $msg; ?>
				</div>
                </div>
            	<div class="juntarcampos">
                <div class="icones"><img src="imagens/cadastro/nome.png" alt="Nome"></div>
            	<div class="campos"><input name="nome" type="text" class="prencher" value="Nome Completo" required></div>
                </div>
                <div class="juntarcampos">
               	<div class="icones"><img src="imagens/cadastro/user.png" alt="Nome"></div>
            	<div class="campos"><input name="user" type="text" class="prencher" value="Usuário" required></div>
                </div>
                <div class="juntarcampos">
            	<div class="icones"><img src="imagens/cadastro/lock.png" alt="Senha"></div>
            	<div class="campos">
                		<input name="senha" type="password" class="prencher_1" value="Password"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required> 
                    		<span class="tooltiptext"><h3>Restrições</h3>
                            					  &#8226; Mínimo 8 Digitos;<br>
                                                  &#8226; Máximo 20 Digitos;<br>
                        						  &#8226; Maiúsculas;<br>
                                                  &#8226; Minúsculas;<br>
                                                  &#8226; Números ou Símbolos;  </span>
						</div>
               	 	<div class="info"><img src="imagens/cadastro/info.png" alt="Duvidas"></div>  
                </div>
                <div class="juntarcampos">            
            	<div class="icones"><img src="imagens/cadastro/lock.png" alt="Confirmar Senha"></div>
                <div class="campos"><input name="confsenha" type="password" class="prencher_1" title="Confirmar Senha" value="Password" required>
                		<span class="tooltiptext"><h3>Confirme a Senha</h3>
                        							  Favor digitar a mesma senha inserida acima</span>
                	</div>
                <div class="info"><img src="imagens/cadastro/info.png" alt="Duvidas"></div>
                </div>
                <div class="juntarcampos">
            	<div class="icones"><img src="imagens/cadastro/mail.png" alt="E-mail"></div>
            	<div class="campos"><input name="email" type="text" class="prencher" value="E-mail" required></div>
                </div>
                <div class="juntarcampos">
            	<div class="icones"><img src="imagens/cadastro/cake.png" alt="Data de Nascimento"></div>
            	<div class="campos"><select name="dia" class="prencher2_1" required>
                <option selected value="">Dia</option>
                	<option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                   </select>
                <select name="mes" class="prencher2" required>
                <option selected value="">Mês</option>
  					<option value="01">Janeiro</option>
  					<option value="02">Fevereiro</option>
  					<option value="03">Março</option>
    				<option value="04">Abril</option>
    				<option value="05">Maio</option>
    				<option value="06">Junho</option>
   					<option value="07">Julho</option>
   					<option value="08">Agosto</option>
    				<option value="09">Setembro</option>
    				<option value="10">Outubro</option>
   					<option value="11">Novembro</option>
   					<option value="12">Dezembro</option>
                    </select>
                    <input name="ano" type="text" class="prencher_2" value="Ano" maxlength="4" required></div>
                    </div>
                 	
 	<!- – Checkbox – ->
               
       <div class="juntarcampos">                        
       <div class="icones"><div class="roundedOne">
			<input type="checkbox" value="1" id="roundedOne" name="concordo"/>
				<label for="roundedOne"></label>
				</div>
                </div>
                 <div class="campos"><p id="especificacao">Concordo com os <a href="#" class="termos">Termos de Serviço</a> e a <a href="#" class="termos">Política de Privacidade</a> do The World.</p></div>
       </div>
       <div class="juntarcampos">
       <div class="icones"><div class="roundedTwo">
			<input type="checkbox" value="1" id="roundedTwo" name="info" />
            	<label for="roundedTwo"></label>
				</div>
                </div>
                 <div class="campos"><p id="mensagem">Gostaria de ser informado de novidades e atualizações através do meu E-mail.</p></div>
       </div>
                 </div> 
                            
                 <input name="gravar" type="image" class="enviar" id="gravar" src="imagens/cadastro/mask.png"><br>
                 </form>
                 <div id="socials"><a href="#"><img src="imagens/cadastro/f.png" alt="Facebook"></a>
                 <a href="#"><img src="imagens/cadastro/t.png" alt="Twitter"></a>
                 <a href="#"><img src="imagens/cadastro/g.png" alt="Google+"></a>
                 </div>                 
              </div>
           </div>
        </div>
               
   
          
         <!- – Menu Fixo – ->
    
    <div id="cabecalho2">
        <div id="logo"><a href="index.php">
        <img src="imagens/cadastro/logo.png" alt="logo"></a></div>
    		<div id="todomenu">
       			<div class="menu"><a href="cadastro.php" class="topmenu">CADASTRO</a> </div>
        		<div class="risquinho"><img src="imagens/cadastro/risquinho.png" alt="Traço"></div>
        		<div class="menu"><a href="sobre.html" class="topmenu">SOBRE</a></div>
        		<div class="risquinho"><img src="imagens/cadastro/risquinho.png" alt="Traço"></div>
       			<div class="menu"><a href="#" class="topmenu">F&Oacute;RUM</a></div>
        		<div class="risquinho"><img src="imagens/cadastro/risquinho.png" alt="Traço"></div>
        		<div class="menu"><a href="comojogar.html" class="topmenu">COMO JOGAR</a></div>
        		<div class="risquinho"><img src="imagens/cadastro/risquinho.png" alt="Traço"></div>
        		<div class="menu"><a href="index.php" class="topmenu">HOME</a></div>
            </div>          
    </div>
   
    
    <!- – Rodapé Fixo – ->
    
    <div id="rodape">&#169; 2016 | The World.com</div>
</body>
</html>

