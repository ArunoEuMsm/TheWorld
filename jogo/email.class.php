<?php
	class email{
		public function enviaremail ($codigo,$email){
			$body = "Código: ".$codigo." E-mail: ".$email." \n";
			
$to = "bublitzarnoldo@gmail.com";
$sub = "Php Mail";
			
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <atendimento@theworld.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

mail($to, $sub, $body, $headers);
			
			}
	}

?>