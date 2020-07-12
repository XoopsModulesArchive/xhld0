<?php
// $Id: modinfo.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_HEADLINES_NAME' ) ) {

// DateTime format


// Appended by Xoops Language Checker -GIJOE- in 2006-05-02 13:15:22
define('_MI_HEADLINES_FETCHMETHOD','method to fetch RSS/ATOM');
define('_MI_HEADLINES_FETCHMETHOD_DSC','use Snoopy if possible. fopen() can work "allow_url_fopen on" in php.ini');
define('_MI_HEADLINES_FM_SNOOPY','snoopy');
define('_MI_HEADLINES_FM_FOPEN','fopen()');
define('_MI_HEADLINES_FM_SSC','stream_socket_client() (PHP5)');

// Appended by Xoops Language Checker -GIJOE- in 2006-02-03 16:31:40
define('_MI_HEADLINES_ADMENU_MYTPLSADMIN','Templates');

define("_MI_DEFAULT_DTFMT_SHORT","j M ah:i");

// The name of this module
define("_MI_HEADLINES_NAME","Manchetes");

// A brief description of this module
define("_MI_HEADLINES_DESC","Exibe um RSS/XML Newsfeed de outros sites");

// Names of blocks for this module (Not all module has blocks)
define("_MI_HEADLINES_BNAME","Manchetes");
define("_MI_HEADLINES_BDESC","Exibir not�cias por RSS/ATOM em c�lulas separadas");
define("_MI_HEADLINES_BNAME_MIXED","Manchetes Recentes");
define("_MI_HEADLINES_BDESC_MIXED","Exibir not�cias por RSS/ATOM agregada");

// Names of admin menu items
define("_MI_HEADLINES_ADMENU1","Listar Manchetes");
define("_MI_HEADLINES_ADMENU_MYBLOCKSADMIN","Blocos/Grupos");

// Configs
define("_MI_HEADLINES_INDEX_VIEWMODE","Visualiza��o padr�o");
define("_MI_HEADLINES_INDEX_VIEWMODED","Seleciona o tipo de visualiza��o como a p�gina principal do m�dulo");
define("_MI_HEADLINES_INDEX_VIEWMODE_MIXED","Mixado & Novas primeiro");
define("_MI_HEADLINES_INDEX_VIEWMODE_CLASSIC","Cl�ssico");
define("_MI_HEADLINES_MIXED_MAXITEM","M�ximo de itens");
define("_MI_HEADLINES_MIXED_MAXITEMD", "Especifica o m�ximo de registros de RSS/ATOMs nas visualiza��es recentes (itens)");
define("_MI_HEADLINES_MIXED_MAXLEN","Tamanho m�ximo");
define("_MI_HEADLINES_MIXED_MAXLEND", "Especifica a quantidade m�xima de caracteres do t�tulo nas visualiza��es recentes (byte)");
define("_MI_HEADLINES_PROXY_HOST","Host Proxy");
define("_MI_HEADLINES_PROXY_HOSTD","Se voc� pega RSS/ATOM via servidor proxy, configure o nome do host ou IP aqui<br />Sen�o, deixe em branco.");
define("_MI_HEADLINES_PROXY_PORT","Porta Proxy");
define("_MI_HEADLINES_PROXY_PORTD","Se voc� pega RSS/ATOM via a servidor proxy, configure o n�mero da porta") ;
define("_MI_HEADLINES_PROXY_USER","Usu�rio Proxy");
define("_MI_HEADLINES_PROXY_USERD","Se o seu servidor proxy precisa autentica��o B�SICA, configure o nome de usu�rio<br />Sen�o, deixe em branco.") ;
define("_MI_HEADLINES_PROXY_PASS","Senha Proxy");
define("_MI_HEADLINES_PROXY_PASSD","Se o seu servidor proxy precisa autentitica��o B�SICA, configure a senha<br />Sen�o, deixe em branco.") ;
define("_MI_HEADLINES_SHORTDTFMT","Formato curto de data&hora");
define("_MI_HEADLINES_SHORTDTFMTD","Descreva-a como o primeiro par�metro da fun��o <i>date()</i> do PHP .<br /><a href='http://jp.php.net/date' target='_blank'>Refer�ncia ao manual de PHP</a>") ;
define("_MI_HEADLINES_MIXPICKUP","N�o colocar um item como recente se a quantidade de <i>feeds</i> for superior ao m�ximo de itens");
define("_MI_HEADLINES_MIXPICKUPD","Escolhendo <b>N�o</b>, as configura��ees para 'M�ximo de itens' para cada <i>feeds</i> ser�o ignoradas.");


}

?>
