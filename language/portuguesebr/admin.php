<?php
// $Id: admin.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
//%%%%%%        Admin Module Name  Headlines         %%%%%

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_DBUPDATED' ) ) {

// list of encodings allowed   (name):(title)|(name):(title)|...
define('_AM_ENCODINGS','utf-8:UTF-8|iso-8859-1:ISO-8859-1|us-ascii:US-ASCII') ;
define('_AM_ENCODING_AUTO','auto detectar') ;

define('_AM_DBUPDATED','Banco de dados atualizado com sucesso!');
define('_AM_HEADLINES','Manchetes');
define('_AM_HLMAIN','Principal');
define('_AM_SITENAME','Nome do site');
define('_AM_URL','URL');
define('_AM_TITLEPATTERN','Exibir os que cont�m a palavra no t�tulo<br /><span style="font-weight:normal;">escreva aqui uma express�o regular do perl. (ex: /dinheiro/)<br />Normalmente, deixe em branco</span>');
define('_AM_TITLEEXCLUDE','Excluir os que cont�m a palavra no t�tulo<br /><span style="font-weight:normal;">escreva aqui uma express�o regular do perl. (ex: /dinheiro/)<br />Normalmente, deixe em branco</span>');
define('_AM_LINKPATTERN','Exibir os que cont�m a palavra no link<br /><span style="font-weight:normal;">escreva aqui uma express�o regular do perl. (ex: /novidades/)<br />Normalmente, deixe em branco</span>');
define('_AM_LINKEXCLUDE','Excluir os que cont�m a palavra no link<br /><span style="font-weight:normal;">escreva aqui uma express�o regular do perl. <br /> Normalmente, deixe em branco</span>');
define('_AM_ORDER', 'Ordem');
define('_AM_ENCODING', 'Codifica��o RSS');
define('_AM_CACHETIME', 'Tempo em cache');
define('_AM_TIMEOUT', 'Time-out da busca');
define('_AM_ALLOWHTML', 'Permitir HTML dentro do XML<br /><span style="font-weight:normal;">Voc� n�o deve permitir HTML para um RSS/ATOM quando este � gerado pelos posts dos visitantes do site.</span>');
define('_AM_MAINSETT', 'Configura��o da p�gina principal');
define('_AM_BLOCKSETT', 'Configura��o dos blocos');
define('_AM_DISPIMG', 'Exibir imagens');
define('_AM_DISPFULL', 'Exibir descri��o e data de publica��o');
define('_AM_DISPMAX', 'Quantidade m�xima de itens a exibir');
define('_AM_DISPLAY', 'Exibir na P�gina Principal');
define('_AM_ASBLOCK', 'Exibir no Bloco');
define('_AM_ADDHEADL','Adicionar Manchete');
define('_AM_URLEDFXML','URI do RSS ou ATOM');
define('_AM_SYNDICATIONTYPE','Tipo do <i>feed</i>');
define('_AM_SYNDICATIONTYPE_AUTO','Auto');
define('_AM_SAVEAS','Salvar como');
define('_AM_UPDATE','Atualizar & Buscar Novamente');
define('_AM_EDITHEADL','Editar Manchete');
define('_AM_WANTDEL','Tem a certeza que quer excluir a manchete para %s?');
define('_AM_INVALIDID', 'ID Inv�lido');
define('_AM_OBJECTNG', 'Objeto n�o existe');
define('_AM_FAILUPDATE', 'Imposs�vel incluir %s no banco de dados');
define('_AM_FAILDELETE', 'Imposs�vel excluir a manchete %s do banco de dados');

}

?>
