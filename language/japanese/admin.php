<?php
// $Id: admin.php,v 1.1 2003/07/02 17:59:05 onokazu Exp $
//%%%%%%        Admin Module Name  Headlines         %%%%%

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_DBUPDATED' ) ) {

// list of encodings allowed   (name):(TITLE)|(name):(TITLE)|...
define('_AM_ENCODINGS','utf-8:UTF-8|euc-jp:EUC-JP|shift_jis:SJIS|iso-8859-1:ISO-8859-1|us-ascii:US-ASCII') ;
define('_AM_ENCODING_AUTO','��ư����') ;

define('_AM_DBUPDATED','�ǡ����١����򹹿����ޤ���!');
define('_AM_HEADLINES','�ե����ɴ��� (No.%s)');
define('_AM_HLMAIN','�إåɥ饤��ᥤ��');
define('_AM_SITENAME','������̾');
define('_AM_URL','������URL');
define('_AM_TITLEPATTERN','�����ȥ�ˤ��ʤ���߾��<br /><span style="font-weight:normal;">perl������ɽ���ǵ��� ��) /��/<br />�������ƹʤ����ɬ�פ��ʤ���ж���Τޤޤˤ��ޤ�</span>');
define('_AM_TITLEEXCLUDE','�����ȥ�ˤ���ӽ����<br /><span style="font-weight:normal;">perl������ɽ���ǵ������̾�϶����</span>');
define('_AM_LINKPATTERN','��󥯤ˤ��ʤ���߾��<br /><span style="font-weight:normal;">perl������ɽ���ǵ��� ��) /business/<br />�������ƹʤ����ɬ�פ��ʤ���ж���Τޤޤˤ��ޤ�</span>');
define('_AM_LINKEXCLUDE','��󥯤ˤ���ӽ����<br /><span style="font-weight:normal;">perl������ɽ���ǵ������̾�϶����</span>');
define('_AM_ORDER', 'ɽ����');
define('_AM_ENCODING', '���󥳡���');
define('_AM_CACHETIME', '��������å���');
define('_AM_TIMEOUT', '�������κ����Ԥ�����');
define('_AM_ALLOWHTML', 'ɽ������HTML�������Ĥ���<br /><span style="font-weight:normal;">���դ�����Ƥ�RSS��ή��Ƥ��ޤ���ǽ���Τ���CMS���Υ����Ȥ�ȯ�Ԥ���ե����ɤˤĤ��Ƥϡ�HTML����Ĥ��ʤ����Ȥ򶯤������ᤷ�ޤ�</span>');
define('_AM_MAINSETT', '�ᥤ��ڡ���������');
define('_AM_BLOCKSETT', '�֥�å�������');
define('_AM_DISPIMG', '������ɽ��');
define('_AM_DISPFULL', '�ƥإåɥ饤��θ��������׻ݤ�ɽ��');
define('_AM_DISPMAX', '����ɽ�����');
define('_AM_DISPLAY', '�ᥤ��ڡ���');
define('_AM_ASBLOCK', '�֥�å�');
define('_AM_ADDHEADL','�إåɥ饤��ο����ɲ�');
define('_AM_URLEDFXML','RSS�ޤ���ATOM��URI');
define('_AM_SYNDICATIONTYPE','�ե����ɥ�����');
define('_AM_SYNDICATIONTYPE_AUTO','��ưȽ��');
define('_AM_SAVEAS','�̥쥳���ɤȤ�����¸');
define('_AM_UPDATE','�������Ƽ���');
define('_AM_EDITHEADL','�إåɥ饤����Խ�');
define('_AM_WANTDEL','�����ˤ��Υإåɥ饤��������Ƥ������Ǥ�����<br> ������̾�� %s');
define('_AM_INVALIDID', 'ID������������ޤ���');
define('_AM_OBJECTNG', '���֥������Ȥ�¸�ߤ��ޤ���');
define('_AM_FAILUPDATE', '�إåɥ饤�����¸���Ǥ��ޤ���Ǥ���<br> %s');
define('_AM_FAILDELETE', '�إåɥ饤��κ�����Ǥ��ޤ���Ǥ���<br> %s');

}

?>
