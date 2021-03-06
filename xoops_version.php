<?php
### =============================================================
### Mastop InfoDigital - Paix�o por Internet
### =============================================================
### Arquivo de Configura��o do M�dulo
### =============================================================
### Developer: Fernando Santos (topet05), fernando@mastop.com.br
### Copyright: Mastop InfoDigital � 2003-2007
### -------------------------------------------------------------
### www.mastop.com.br
### =============================================================
### $Id: xoops_version.php,v 1.1.1.1 2007/04/30 23:18:58 topet05 Exp $
### =============================================================
include_once XOOPS_ROOT_PATH."/modules/".MGO_MOD_DIR."/include/funcoes.inc.php";
// Dados do M�dulo
$modversion['name'] = MGO_MOD_NOME;
$modversion['version'] = 1;
$modversion['author']  = 'Fernando Santos (aka topet05)';
$modversion['description'] = MGO_MOD_DESC;
$modversion['credits'] = "Mastop InfoDigital - www.mastop.com.br";
$modversion['help'] = "";
$modversion['license'] = "GPL";
$modversion['official'] = 0;
$modversion['image'] = "images/mgo2_logo.gif";
$modversion['dirname'] = MGO_MOD_DIR;

// Arquivo Sql (Deve conter o dump de todas as tabelas do m�dulo)
// Todas as tabelas devem estar sem o prefixo!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tabelas criadas pelo Arquivo sql (sem prefixo poha!)
$modversion['tables'][0] = MGO_MOD_TABELA0;
$modversion['tables'][1] = MGO_MOD_TABELA1;

// Itens da Administra��o
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/go2.php";
$modversion['adminmenu'] = "admin/menu.php";

$modversion['blocks'][1]['file'] = MGO_MOD_BLOCO1_FILE;
$modversion['blocks'][1]['name'] = MGO_MOD_BLOCO1;
$modversion['blocks'][1]['description'] = MGO_MOD_BLOCO1_DESC;
$modversion['blocks'][1]['show_func'] = MGO_MOD_BLOCO1_SHOW;
$modversion['blocks'][1]['edit_func'] = MGO_MOD_BLOCO1_EDIT;
$modversion['blocks'][1]['options'] = '0|200|1|1|6|333333|FFFFFF|50';
$modversion['blocks'][1]['template'] = MGO_MOD_BLOCO1_TEMPLATE;

// Menu
$modversion['hasMain'] = 1;

// Busca
$modversion['hasSearch'] = 0;

// Configura��es (Para as prefer�ncias do m�dulo)
$imgcat_handler =& xoops_gethandler('imagecategory');
$catlist =& array_flip($imgcat_handler->getList(array(), 'imgcat_read', 1));
$modversion['config'][1]['name'] = 'mgo_des_img';
$modversion['config'][1]['title'] = 'MGO_MOD_DSTAC_IMG';
$modversion['config'][1]['description'] = 'MGO_MOD_DSTAC_IMG_DES';
$modversion['config'][1]['formtype'] = 'select_multi';
$modversion['config'][1]['valuetype'] = 'array';
$modversion['config'][1]['options'] = $catlist;