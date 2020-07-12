<?php
// $Id: admin.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
//%%%%%%        Admin Module Name  Headlines         %%%%%

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_DBUPDATED' ) ) {

// list of encodings allowed   (name):(title)|(name):(title)|...
define('_AM_ENCODINGS', 'utf-8:UTF-8|iso-8859-1:ISO-8859-1|us-ascii:US-ASCII');
define('_AM_ENCODING_AUTO', 'auto detección');

define('_AM_DBUPDATED', '¡Base de Datos Actualizada Correctamente!');
define('_AM_HEADLINES', 'Configuración de los Titulares (No.%s)');
define('_AM_HLMAIN', 'Titular Principal');
define('_AM_SITENAME', 'Nombre del Sitio');
define('_AM_URL', 'URL');
define('_AM_TITLEPATTERN', 'Extraer con texto de título<br /><span style="font-weight:normal;">escriba aquí una expresión regular de perl ej.) /dolar/</span>');
define('_AM_TITLEEXCLUDE', 'Excluir con cadena de título<br /><span style="font-weight:normal;">(expresión regular de perl) Normally left blank</span>');
define('_AM_LINKPATTERN', 'Extraer con texto de enlace<br /><span style="font-weight:normal;">escriba aquí una expresión regular de perl ej.) /negocios/</span>');
define('_AM_LINKEXCLUDE', 'Exclior con cadena de link<br /><span style="font-weight:normal;">(expresión regular de perl) Normalmente en blanco</span>');
define('_AM_ORDER', 'Orden');
define('_AM_ENCODING', 'Codificación RSS');
define('_AM_CACHETIME', 'Tiempo de Cache');
define('_AM_TIMEOUT', 'Tiempo de espera al recibir');
define('_AM_ALLOWHTML', 'Permitir mostrar HTML dentro de XML<br /><span style="font-weight:normal;">No debería permitirlo para un agregador RSS/ATOM generado a partir de posts por los visitantes del sitio.</span>');
define('_AM_MAINSETT', 'Configuraciones de Página Principal');
define('_AM_BLOCKSETT', 'Configuraciones de Bloque');
define('_AM_DISPIMG', 'Mostrar imagen');
define('_AM_DISPFULL', 'Exhibir descripción y fecha de publicación también');
define('_AM_DISPMAX', 'Máx elementos a mostrar');
define('_AM_DISPLAY', 'Mostrar en página principal');
define('_AM_ASBLOCK', 'Mostrar en bloque');
define('_AM_ADDHEADL', 'Añadir Titular');
define('_AM_URLEDFXML', 'URL del RSS/ATOM');
define('_AM_SYNDICATIONTYPE', 'Tipo de feed');
define('_AM_SYNDICATIONTYPE_AUTO', 'Auto');
define('_AM_SAVEAS', 'Guardar como');
define('_AM_UPDATE', 'Actualizar y recargar');
define('_AM_EDITHEADL', 'Editar Titular');
define('_AM_WANTDEL', '¿Seguro que desea borrar el titular para %s?');
define('_AM_INVALIDID', 'ID Inválido');
define('_AM_OBJECTNG', 'El objeto no existe');
define('_AM_FAILUPDATE', 'Fallo al guardar información en la base de datos para el titular %s');
define('_AM_FAILDELETE', 'Fallo al borrar información de la base de datos para el titular %s');

}

?>
