<meta charset="utf-8">
<form method="post" action="">
	
	<input type="text" name="busca">
	<button>Enviar</button>

</form>

<?php

/*  UDEMY - PHP7 - SEGURANÇA
 *
 *	ATAQUE XSS
 *	|	SE TRATA DE INJEÇÃO DE TAGS HTML/JS NOS CAMPOS DE ENTRADA DE DADOS
 *	|	PODENDO CAUSAR DANOS TEMPORÁRIOS OU PERMANENTES TANTO NA INTERFACE
 * 	|	QUANTO NA BASE DE DADOS DO SISTEMA. A SEGUIR SERÃO LISTADAS PRÁTICAS
 *	|	PARA EVITAR ESTE TIPO DE ATAQUE
 *
 *	~GABRIEL MARTINS
 */	

if (isset($_POST['busca'])) {
	
	 //strip_tags remove as tags de uma string p/ evitar ataques xss
	//pode-se receber um segundo parâmetro informando tags permitidas 
	echo strip_tags($_POST['busca'],"<a>");

	//esta função transforma as tags em string
	echo htmlentities($_POST['busca']);
 	 //saída
 	//>&lt;a href=&quot;http:/www.google.com&quot;&gt;google&lt;/a&gt;<br> &lt &quot &quot &gtgt

	echo "<br>";

       // &lt = <
      // &quot = "
     // &gt = >
	//echo "&lt &quot &quot &gt";
}
?>
