<?php

/*  UDEMY - PHP7 - SEGURANÇA
 *
 *	INJECTION
 *	|	
 *	|	
 * 	|	
 *	|	
 *  |   
 *  |   
 *  |   
 *  |   
 *
 *	~GABRIEL MARTINS
 */	

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //verifica se a requisição é via POST
	
	echo "<pre>";

	//o comando abaixo executa qualquer comando de cmd enviado pelo usuário
	# $cmd = $_POST['cmd'];

	//já este, interrompe o comando p/ que haja segurança no sistema e na maquina
	$cmd = escapeshellcmd($_POST['cmd']);
	var_dump($cmd); //retorno do comando interrompido

}

 //system() possui retorno. exec() não. Ambos executam comandos de CMD
//abaixo executa-se comandos dinâmicos e mostra-se o retorno
$comand = system($cmd, $return);

echo "<pre>";
?>

<!-- form p/ o envio de comandos -->
<form method="post">
	<input type="text" name="cmd">
	<button>Enviar</button>
</form>