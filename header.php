<?php
### =============================================================
### Mastop InfoDigital - Paix�o por Internet
### =============================================================
### Header do M�dulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital � 2003-2007
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: header.php,v 1.1.1.1 2007/04/30 23:18:58 topet05 Exp $
### =============================================================
include XOOPS_ROOT_PATH."/header.php";
if ( file_exists("language/".$xoopsConfig['language']."/modinfo.php") ) {
	include_once("language/".$xoopsConfig['language']."/modinfo.php");
} else {
	include_once("language/portuguesebr/modinfo.php");
}
include_once XOOPS_ROOT_PATH."/modules/".MGO_MOD_DIR."/include/funcoes.inc.php";