<?php
// $Id: modinfo.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
// Module Info

//Russian translation and russian encoding adaptation by Vladislav "FractalizeR" Rastrusny. http://www.vrsi.ru

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_HEADLINES_NAME' ) ) {

// DateTime format



// Appended by Xoops Language Checker -GIJOE- in 2006-05-02 13:15:21
define('_MI_HEADLINES_FETCHMETHOD','method to fetch RSS/ATOM');
define('_MI_HEADLINES_FETCHMETHOD_DSC','use Snoopy if possible. fopen() can work "allow_url_fopen on" in php.ini');
define('_MI_HEADLINES_FM_SNOOPY','snoopy');
define('_MI_HEADLINES_FM_FOPEN','fopen()');
define('_MI_HEADLINES_FM_SSC','stream_socket_client() (PHP5)');

// Appended by Xoops Language Checker -GIJOE- in 2006-02-03 16:31:39
define('_MI_HEADLINES_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2005-08-09 17:42:00
define('_MI_HEADLINES_BDESC','Shows headline news via RSS/ATOM in separate cells');
define('_MI_HEADLINES_BDESC_MIXED','Shows headline news via RSS/ATOM in an aggregated view');

define("_MI_DEFAULT_DTFMT_SHORT","d-m-Y H:i");

// The name of this module
define("_MI_HEADLINES_NAME","��������� ���������");

// A brief description of this module
define("_MI_HEADLINES_DESC","���������� ��������� ��������� RSS/XML � ������ ������");

// Names of blocks for this module (Not all module has blocks)
define("_MI_HEADLINES_BNAME","��������� ���������");
define("_MI_HEADLINES_BNAME_MIXED","��������� ��������� ��������");

// Names of admin menu items
define("_MI_HEADLINES_ADMENU1","������ ��������� ����������");
define("_MI_HEADLINES_ADMENU_MYBLOCKSADMIN","�����/������");

// Configs
define("_MI_HEADLINES_INDEX_VIEWMODE","��� �� ���������");
define("_MI_HEADLINES_INDEX_VIEWMODED","�������� ��� ����������� �� ����� ������");
define("_MI_HEADLINES_INDEX_VIEWMODE_MIXED","��������� � ����� �������");
define("_MI_HEADLINES_INDEX_VIEWMODE_CLASSIC","�����������");
define("_MI_HEADLINES_MIXED_MAXITEM","�������� ���������");
define("_MI_HEADLINES_MIXED_MAXITEMD", "������� �������� ��������� RSS/ATOMs ��� �����������");
define("_MI_HEADLINES_MIXED_MAXLEN","������������ �����");
define("_MI_HEADLINES_MIXED_MAXLEND", "������� ������������ ����� ������������ � ��������");
define("_MI_HEADLINES_PROXY_HOST","���� ������");
define("_MI_HEADLINES_PROXY_HOSTD","���� �� ��������� ��������� ��������� RSS/ATOM ����� ������-������, ������� ����� ��� ����� ��� IP �����<br />� ��������� ������, �������� ���� ������.");
define("_MI_HEADLINES_PROXY_PORT","���� ������");
define("_MI_HEADLINES_PROXY_PORTD","���� �� ��������� ��������� ��������� RSS/ATOM ����� ������-������, ���������� ����� ����� �����.<br />� ��������� ������, �������� ���� ������.") ;
define("_MI_HEADLINES_PROXY_USER","����� ������");
define("_MI_HEADLINES_PROXY_USERD","���� ��� ������ ������� ��������������, ������� ����� �����.<br />� ��������� ������, �������� ���� ������.") ;
define("_MI_HEADLINES_PROXY_PASS","������ ������");
define("_MI_HEADLINES_PROXY_PASSD","���� ��� ������ ������� ��������������, ������� ����� ������.<br />� ��������� ������, �������� ���� ������.") ;
define("_MI_HEADLINES_SHORTDTFMT","������� ������ ���� � �������");
define("_MI_HEADLINES_SHORTDTFMTD","��� ������ ��������, ������������ ������� PHP().<br /><a href='http://ru.php.net/date'>������� �� ����������</a>") ;
define("_MI_HEADLINES_MIXPICKUP","�� �������� ������� ��� ��������, ���� �� � ��� ������ ��������� ������������� ���������� ���������");
define("_MI_HEADLINES_MIXPICKUPD","���� �� ���������� ��� ��������� � ���, ��������� '������������� ����������' ����� ���������������.");

}

?>