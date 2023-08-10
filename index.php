<!DOCTYPE html>
<html lang="pt-br">

<head>
   <title>The World</title>
    <meta name="author" content="The World" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html;charset=ANSI"/> 
    <meta name="description" content="O Site de RPG de Mesa Online"/>
    <meta name="keywords" content="RPG, mesa, Rpg de Mesa, jogo, medieval, mundo, aventura, diversão, batalha, game, online, login"/>
	<link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">	
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon" />
	
    
    
    <script type="text/javascript" src=				"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js">	</script>
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
function filterPath(string) {
return string
.replace(/^\//,'')
.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
.replace(/\/$/,'');
}
$('a[href*=#]').each(function() {
if ( filterPath(location.pathname) == filterPath(this.pathname)
&& location.hostname == this.hostname
&& this.hash.replace(/#/,'') ) {
var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
if ($target) {
var targetOffset = $target.offset().top;
$(this).click(function() {
$('html, body').animate({scrollTop: targetOffset}, 800);
return false;
});
}
}
});
});
// ]]></script>
    
    
</head>

<body>   


<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

//Include//

include("jogo/header.php");
if(isset($flash)){
echo $flash;
}
?>



		<div class="post1_sobre">
        <a name="slide1">
        		<div id="fundo1_index">
            		<div class="content">
            		<img src="imagens/index/logo3.png">
           			<p id="texto1_index">O módulo de RPG de mesa adaptado e otimizado para funcionar através da Internet. Um ótimo instrumento para deixar a imaginação fluir, mantendo o mesmo dinamismo de um bom jogo. Com ótimas ferramentas e cálculos embutidos é a formula que facilitam o trabalho do mestre, criando um RPG epicamente inesquecível.</p>
           			<a href="cadastro.html" style="text-decoration:none"><div class="acesse">ACESSE AGORA!</div></a>
          			</div>
               	</div>
        </a> 
		</div>
        <div class="separar"></div>
		<div class="post2_sobre">
        <a name="slide2">
			<div id="fundo2_index">
            <div id="content">
            <img src="imagens/index/tumba.png">
            <h1 id="underground">UNDERTUMB</h1>
            <img src="imagens/index/under.png">
            <p class="texto2_index">Um forte terremoto abalou o mundo este mês, dentre os estragos, uma misteriosa fenda se abriu sob o cemitério de Crossbow revelando uma masmorra escura e sombria. Ninguém sabe quem construiu, ou quando, ou para quê. Não parece se um local perigoso, mesmo assim, dos 30 soldados <span class="center"> enviados pelo rei, nenhum voltou. </span></p>
            <a href="#" style="text-decoration:none"><div class="acesse">EXPLORAR?</div></a>
            </div>
            </div>
        </a>
		</div>
        <div class="separar"></div>
		<div class="post2_sobre">
        <a name="slide3">
			<div id="fundo3_index">
            <div class="content">
            <img src="imagens/index/titulo.png">
          <div id="benefits">
            <div class="icones_index">
            <img src="imagens/index/i_money.png">
            <p class="texto2_index">A<span class="menor_index">TÉ W$100.000 POR MÊS</span></p>
            </div>
            <div class="icones_index">
            <img src="imagens/index/i_local.png">
            <p class="texto2_index">A<span class="menor_index">CESSO A LOCAIS PREMIUM</span></p>
            </div>
            <div class="icones_index">
            <img src="imagens/index/i_cont.png">
            <p class="texto2_index">C<span class="menor_index">ONTEÚDO EXCLUSIVO</span></p>
            </div>
            <div class="icones_index">
            <img src="imagens/index/i_pasta.png">
            <p class="texto2_index">+1G<span class="menor_index">B DE ARMAZENAGEM</span></p>
            </div>
            <div class="icones_index">
            <img src="imagens/index/i_ponto.png">
            <p class="texto2_index">E<span class="menor_index">NTRE MUITOS OUTROS BENEFÍCIOS</span></p>
            </div>
          </div>
            <a href="#" style="text-decoration:none"><div class="acesse">DESCUBRA MAIS...</div></a>
            </div>
            </div>
        </a>
		</div>
 
    <div id="cabecalho_index">    	
        <div id="logo_index">
        	<div id="the_world"><a href="index.php"><img src="imagens/index/RPG ONLINE.png"></a></div></div><div id="login">
                <form name="login" method="POST" action="?acao=logar">
            	<div id="restringir">
                <div class="campos_index"><input name="email" type="text" class="prencher_index" value="Usuário / E-mail" size="30" onfocus="this.value='';"></div>
                <div class="campos_index"><input name="senha" type="password" class="prencher_index" value="Senha" size="30" onfocus="this.value='';"></div>
                </div>
                <div id="restringir2">
                <input name="MinhaImagem" type="image" id="enviar" src="imagens/index/login.png">
                <a href="#"><img src="imagens/index/f.png"></a>
                <a href="#"><img src="imagens/index/t.png"></a>
                <a href="#"><img src="imagens/index/g.png"></a>
                </div>
            </form>
            </div>     
        	<div id="todomenu_index">
       			<div class="menu_index"><a href="comojogar.html" class="topmenu_index">COMO JOGAR</a></div>
        		<div class="risquinho_index"><img src="imagens/index/risquinho.png" alt="Traço"></div>
        		<div class="menu_index"><a href="#" class="topmenu_index">F&Oacute;RUM</a></div>
        		<div class="risquinho_index"><img src="imagens/index/risquinho.png" alt="Traço"></div>
       			<div class="menu_index"><a href="sobre.html" class="topmenu_index">SOBRE</a></div>
        		<div class="risquinho_index"><img src="imagens/index/risquinho.png" alt="Traço"></div>
        		<div class="menu_index"><a href="cadastro.php" class="topmenu_index">CADASTRO</a> </div>
            </div> 
            
        </div>



        
    <!- – Rodapé Fixo – ->
    
    <div id="rodape_index">&#169; 2016 | The World.com</div>
 
 <div id="barra_fixa">
 	<div id="central">
		<div class="junto">
    			<div class="botoes">
    				<a href="#slide1">
					<div class="rounded1">
					</div></a>
			</div>

			 <div class="botoes">
     				<a href="#slide2">
					<div class="rounded2">
   					</div></a>
			 </div>
			 <div class="botoes">
   				<a href="#slide3">
					<div class="rounded3">
    					</div></a>
			 </div>
                 </div>
	 </div>
    
</body>

</html>