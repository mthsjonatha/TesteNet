<?php
/******************************************************************
Script .........: Controle de Gado e Fazendas
Por ............: Fabio Nowaki
Data ...........: 30/08/2006
********************************************************************************************/
//ini_set('session.cache_limiter', 'private');

//	$destroi	=	session_destroy();****************************************/

##############################################################################
## INCLUDES E CONEX�ES BANCO
##############################################################################

session_start();
include_once "class.Template.inc.php";
require_once('banco.inc.php');

##############################################################################
##############                INCLUDES : CABECALHO             	##############
##############################################################################	

$layout="movimento";
$titulo="MOVIMENTO";

$sub_titulo="MOVIMENTO";

include "cabecalho.php";

##############################################################################
##############                INDEXA O TEMPLATE             	##############
##############################################################################	

//$theme = ".";
//$model = new Template($theme);
$model->set_filenames(array('movimento' => 'movimento.htm'));

##############################################################################
##############                      PAGINA                  	##############
##############################################################################	



$model->pparse('movimento');

##############################################################################
##############                INCLUDES : RODAPE             	##############
##############################################################################	

include "rodape.php";


?>