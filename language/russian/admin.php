<?php
// $Id: admin.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
//%%%%%%        Admin Module Name  Headlines         %%%%%

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_DBUPDATED' ) ) {


//Russian translation and russian encoding adaptation by Vladislav "FractalizeR" Rastrusny. http://www.vrsi.ru

// list of encodings allowed   (name):(title)|(name):(title)|...

// Appended by Xoops Language Checker -GIJOE- in 2005-02-21 06:07:13
define('_AM_TITLEEXCLUDE','Exclude with title string<br /><span style="font-weight:normal;">(perl regex) Normally left blank</span>');
define('_AM_LINKEXCLUDE','Exclude with link string<br /><span style="font-weight:normal;">(perl regex) Normally left blank</span>');

define('_AM_ENCODINGS','utf-8:UTF-8|iso-8859-1:ISO-8859-1|us-ascii:US-ASCII|WINDOWS-1251:Windows-1251|KOI8-R:KOI8-R|KOI8-U:KOI8-U|KOI8-RU:KOI8-RU') ;
define('_AM_ENCODING_AUTO','����-�����������') ;

define('_AM_DBUPDATED','���� ������ ������� ���������!');
define('_AM_HEADLINES','������������ ���������� �������� (�%s)');
define('_AM_HLMAIN','�������');
define('_AM_SITENAME','�������� �����');
define('_AM_URL','URL');
define('_AM_TITLEPATTERN','��������� ������ �� ������� �������� <br /><span style="font-weight:normal;">������� ����� ������� ���������� ��������� perl. ��������: /doller/<br />������, ��������� ������</span>');
define('_AM_LINKPATTERN','��������� ������ �� ������� ������ <br /><span style="font-weight:normal;">������� ����� ������� ���������� ��������� perl. ��������: /business/<br />������, ��������� ������</span>');
define('_AM_ORDER', '������� ������');
define('_AM_ENCODING', '���������');
define('_AM_CACHETIME', '����� ����');
define('_AM_TIMEOUT', '����� �������� ������ �������');
define('_AM_ALLOWHTML', '��������� ���������� HTML ������ XML<br /><span style="font-weight:normal;">�� �� ������ �������� ��� ����� ��� RSS/ATOM ����������, ������������ �� ������ ����� ����������� �� ����������� ������������.</span>');
define('_AM_MAINSETT', '��������� ������� ��������');
define('_AM_BLOCKSETT', '��������� �����');
define('_AM_DISPIMG', '���������� ��������');
define('_AM_DISPFULL', '��� �� ���������� �������� � ���� ����������');
define('_AM_DISPMAX', '����. ���������� ��������� ��� �����������');
define('_AM_DISPLAY', '���������� �� ������� ��������');
define('_AM_ASBLOCK', '���������� � �����');
define('_AM_ADDHEADL','�������� ���������');
define('_AM_URLEDFXML','URI RSS ��� ATOM');
define('_AM_SYNDICATIONTYPE','��� �������');
define('_AM_SYNDICATIONTYPE_AUTO','����');
define('_AM_SAVEAS','��������� ���');
define('_AM_UPDATE','��������');
define('_AM_EDITHEADL','������������� ���������');
define('_AM_WANTDEL','�� �������, ��� ������ ������� ��������� ��� %s?');
define('_AM_INVALIDID', '�������� ID');
define('_AM_OBJECTNG', '������ �� ����������!');
define('_AM_FAILUPDATE', '���������� ��������� ������ � ���� ��� ��������� %s');
define('_AM_FAILDELETE', '���������� ������� ������ �� ���� ��� ��������� %s');

}

?>
