<?php

/*  UDEMY - PHP7 - SEGURANÇA
 *
 *	RECAPCTHA
 *	|	SE TRATA DE UM PROJETO OPEN SOURCE DO GOOGLE QUE TEM POR OBJETIVO  
 *	|	COLETAR RESPOSTAS PARA AMBIGUIDADES ENCONTRADAS NO STREET VIEW
 * 	|	O RECURSO É GRATUITO E CONTA COMO APOIO E CONTRIBUIÇÃO A 
 *	|	COMUNIDADE DE DESENVOLVEDORES, ALÉM DE SER UMA PRÁTICA EFICAZ DE 
 *  |   SEGURANÇA PARA EVITAR QUE SCRIPTS AUTOMATIZADOS (ROBÔS) FAÇAM TAREFAS
 *  |   NO SITE A FIM DE SOBRECARREGAR OS DADOS TRAFEGADOS SERVIDOR, OU
 *  |   OUTRA INTENÇÃO MALICIOSA, ALÉM DE TAMBÉM GARANTIR QUE OS DADOS RECEBIDOS
 *  |   ESTÃO VINDO DE FATO DÁ MESMA PÁGINA E QUE FORAM FORNECIDOS POR HUMANOS 
 *
 *	~GABRIEL MARTINS
 */	

/* INSTRUÇÕES INICIAIS
 * primeiro, deve-se acessar o SITE OFICIAL do projeto
 * https://www.google.com/recaptcha/intro/v3.html
 * depois clicar em "Admin Console"
 */

?>

<!-- TAG FORNECIDA PELO SITE OFICIAL -->
<!-- integração com a API do recurso -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<form method="post" action="cadastrar.php">
	<!-- TAG FORNECIDA PELO SITE OFICIAL -->
	<!-- implantação da caixa de recaptcha  -->
	<div class="g-recaptcha" data-sitekey="6LffkIwUAAAAAPBUzHcboC1bEbnA9P5mBs9maTdQ"></div>
	<input type="email" name="email">
	<button>Enviar</button>
	
</form>