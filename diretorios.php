<?php

/*  UDEMY - PHP7 - SEGURANÇA
 *
 *	DIRETÓRIOS
 *	|	PERMISSÕES EM DIRETÓRIOS SÃO DE EXTREMA IMPORTÂNCIA PRINCIPALMENTE
 *	|	EM AMBIENTES DE HOSPEDAGEM FTP, ONDE É NECESSÁRIO QUE SE CONTROLE OS 
 * 	|	DIREITOS DE ACESSO, A FIM DE EVITAR INVASÕES DE USUÁRIOS MAL INTENCIONADOS. 
 *	|	
 *  |   SEGUE O PADRÃO PARA DEFINIÇÃO DE PERMISSÕES:
 *  |   
 *  |   STRING | BINÁRIO | DECIMAL |         PERMISSÃO 
 *  |   __________________________________________________________
 *  |   
 *  |    ---   |   000   |    0    |  nenhuma
 *  |   __________________________________________________________
 *  |
 *  |    --x   |   001   |    1    |  execução
 *  |   __________________________________________________________
 *  |
 *  |    -w-   |   010   |    2    |  escrita
 *  |   __________________________________________________________
 *  |
 *  |    -wx   |   000   |    3    |  escrita e execução
 *  |   __________________________________________________________ 
 *  |
 *  |    r--   |   000   |    4    |  leitura
 *  |   __________________________________________________________
 *  |
 *  |    r-x   |   000   |    5    |  leitura e execução
 *  |   __________________________________________________________
 *  |
 *  |    rw-   |   000   |    6    |  leitura e escrita
 *  |   __________________________________________________________
 *  |
 *  |    rwx   |   000   |    7    |  leitura, escrita e execução
 *  |   __________________________________________________________
 *  |
 *
 *	~GABRIEL MARTINS
 *
 */
 	

$folder = "arquivos";

if (!is_dir($folder)) {
	mkdir($folder, 0775);	
	echo "Diretório criado";
}

/*  
 *
 *	(user)(group)(others/guest)
 *	  7      7         5
 * 	 rwx    rwx       r-x
 *	
 */	