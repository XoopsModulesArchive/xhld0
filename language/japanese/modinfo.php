<?php
// $Id: modinfo.php,v 1.1 2003/07/02 17:59:05 onokazu Exp $
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_HEADLINES_NAME' ) ) {

// DateTime format
define("_MI_DEFAULT_DTFMT_SHORT","m/d H:i");

// The name of this module
define("_MI_HEADLINES_NAME","�إåɥ饤��");

// A brief description of this module
define("_MI_HEADLINES_DESC","RSS/XML�����Υ˥塼��������֥�å����ɽ�����ޤ�");

// Names of blocks for this module (Not all module has blocks)
define("_MI_HEADLINES_BNAME","�إåɥ饤��֥�å�");
define("_MI_HEADLINES_BDESC","���������إåɥ饤���ե�������˸���ɽ������֥�å�");
define("_MI_HEADLINES_BNAME_MIXED","�ǿ��إåɥ饤��֥�å�");
define("_MI_HEADLINES_BDESC_MIXED","���������إåɥ饤���ޤȤ�ƺǿ�����¤��ؤ���ɽ������֥�å�");

// Names of admin menu items
define("_MI_HEADLINES_ADMENU1","�ե����ɴ���");
define("_MI_HEADLINES_ADMENU_MYTPLSADMIN","�ƥ�ץ졼�ȴ���");
define("_MI_HEADLINES_ADMENU_MYBLOCKSADMIN","�֥�å������롼�״���");

// Configs
define("_MI_HEADLINES_INDEX_VIEWMODE","ɽ���⡼������");
define("_MI_HEADLINES_INDEX_VIEWMODED","�⥸�塼��ȥåץڡ�����ɽ������������");
define("_MI_HEADLINES_INDEX_VIEWMODE_MIXED","�������ɽ��");
define("_MI_HEADLINES_INDEX_VIEWMODE_CLASSIC","���饷�å�ɽ��");
define("_MI_HEADLINES_MIXED_MAXITEM","����ꥹ�Ȥ�ɽ�������ȥ����");
define("_MI_HEADLINES_MIXED_MAXITEMD", "ɽ���⡼�����򤬡ֿ������ɽ���פλ����ꥹ�Ȥκ���ɽ����������� (ñ�̤ϹԿ�)");
define("_MI_HEADLINES_MIXED_MAXLEN","����ꥹ�Ȥκ���ɽ��ʸ����");
define("_MI_HEADLINES_MIXED_MAXLEND", "ɽ���⡼�����򤬡ֿ������ɽ���פλ��������ȥ�κ���ɽ��ʸ���������� (ñ�̤�byte)");
define("_MI_HEADLINES_PROXY_HOST","�ץ����ۥ���");
define("_MI_HEADLINES_PROXY_HOSTD","�ץ�����ͳ��RSS/ATOM����������硢�����ˤ��Υۥ���̾�ޤ���IP�򵭽Ҥ��ޤ���<br />�ץ������ͳ���ʤ����ϡ�����Τޤޤˤ��ޤ�");
define("_MI_HEADLINES_PROXY_PORT","�ץ����ݡ����ֹ�");
define("_MI_HEADLINES_PROXY_PORTD","�ץ������ͳ�����硢���Υݡ����ֹ����������Ϥ��ޤ�") ;
define("_MI_HEADLINES_PROXY_USER","�ץ����桼��̾");
define("_MI_HEADLINES_PROXY_USERD","�ץ�����ǧ�ڤ�ɬ�פȤ����硢���Υ桼��̾�����Ϥ��ޤ�<br />ɬ�פ��ʤ���ж���Τޤޤˤ��ޤ�") ;
define("_MI_HEADLINES_PROXY_PASS","�ץ����ѥ����");
define("_MI_HEADLINES_PROXY_PASSD","�ץ�����ǧ�ڤ�ɬ�פȤ����硢���Υѥ���ɤ����Ϥ��ޤ�<br />ɬ�פ��ʤ���ж���Τޤޤˤ��ޤ�") ;
define("_MI_HEADLINES_SHORTDTFMT","����ȯ�Ի��֤Υե����ޥåȡ�û�̷���");
define("_MI_HEADLINES_SHORTDTFMTD","PHP��date()�ؿ��Υե����ޥåȤǵ��Ҥ��ޤ���<br /><a href='http://jp.php.net/date'>PHP�ޥ˥奢��򻲾�</a>") ;
define("_MI_HEADLINES_MIXPICKUP","��������ˤϳƥե����ɤμ�����¤����ܤ�ʤ�");
define("_MI_HEADLINES_MIXPICKUPD","�֤������פξ�硢�ƥե����ɤ����ꤵ�줿�ᥤ��ڡ�����֥�å��κ���ɽ�������̵�뤵�졢���˿����������������¤Ӥޤ�");

define('_MI_HEADLINES_FETCHMETHOD','RSS/ATOM�μ�����ˡ') ;
define('_MI_HEADLINES_FETCHMETHOD_DSC','�̾��Snoopy�����Ѥ��Ƥ���������������Ȥɤ����Ƥ⤦�ޤ��Ԥ��ʤ����ˤ�����fopen()���Ƥ���������fopen()��PHP������ˤ�����allow_url_fopen����Ĥ��Ƥ��ʤ���ư��ޤ��󡣡ʤ����Ƶ��Ĥ�������Ϥ��ޤꤪ����Ǥ��ޤ����') ;
define('_MI_HEADLINES_FM_SNOOPY','snoopy');
define('_MI_HEADLINES_FM_FOPEN','fopen()');
define('_MI_HEADLINES_FM_SSC','stream_socket_client() (PHP5�Τ�)');



}

?>