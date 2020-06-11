<?php

/*  UDEMY - PHP7 - SEGURANÇA
 *
 *	SQL INJECTION 
 *	|	SE TRATA DE INJEÇÃO DE COMANDOS SQL NOS CAMPOS DESTINADOS AO USUÁRIO 
 *  |   QUE QUANDO EXECUTADOS, RETORNAM A QUERY INJETADA, LOGO,  
 *	|	PODENDO COMPROMETER A SEGURANÇA DOS DADOS DOS DEMAIS USUÁRIOS DO
 * 	|	SISTEMA, EXPONDO SUAS INFORMAÇÕES CONFIDENCIAIS
 *	|
 *	|   UMA FORMA EFICAZ DE PROTEGER O SISTEMA CONTRA ISSO É USAR CLASSES 
 *	|	DO PHP QUE SEJAM DEDICADAS P/ TAREFAS QUE ENVOLVAM A BASE DE DADOS  	
 *	|   COMO POR EXEMPLO Mysqli E Pdo. ALÉM DE REALIZAR O DEVIDO TRATAMENTO
 *	|   DOS DADOS RECEBIDOS PELO USUÁRIO.
 *	|
 *	~GABRIEL MARTINS
 */


/* RECEBIMENTO DO PARÂMETRO
 * Aqui se recebe o parâmetro p/ a query via GET, isto é, pela URL:
 * http://localhost/udemy/security/sql_injection.php?id=2
 * caso não haja valor inserido pelo usuário, o valor padrão será 1.
 *
 * Injection: o comando clássico utilizado é o seguinte:
 * http://localhost/udemy/security/sql_injection.php?id=2 or 1=1 --
 *
 * o retorno desta condição será sempre true (pois 1 = 1), logo, fazendo com que 
 * a query seja executada em sua totalidade exibindo todos os registros, 
 * ignorando a clausula WHERE  no que se refere ao retorno
 * de um cliente com aquelas condição de parâmetro. 
 */

$id = (isset($_GET['id']))? $_GET['id'] : 1;

#####

/* RESOLUÇÃO: TRATAMENTO DE DADOS
 * nesse contexto, para resolver este ataque verifica-se se o valor inserido
 * não é um número ou se seu tamanho é maior que 5 caracteres
 * se uma dessas condições forem verdadeiras, o comando exit será acionado
 * interrompendo a execução da query, consequentemente, protegendo o sistema  
 */

# RETIRE OS COMENTÁRIOS DO CÓDIGO A SEGUIR
//if (!is_numeric($id) || strlen($id) > 5) {
//	exit("Preteção contra SQL Injection");
//}

####

/* CONEXÃO E CONSULTA
 * para este exemplo, usa-se um método inseguro p/ a comunicação com a base de dados
 * com a intenção de demonstrar sua vulnerábilidade
 * Uso de métodos nativos do php mysqli_connect() e mysqli_query()
 */

$con = mysqli_connect('localhost', 'root', '', 'loja');
$sql = "SELECT * from cliente where id_cliente = $id";
$exec = mysqli_query($con, $sql);

// mostra-se o retorno da consulta, enquanto houverem resultados a serem mostrados
while ($result = mysqli_fetch_object($exec)) {
	echo $result->nome . "<br>";
}

####
