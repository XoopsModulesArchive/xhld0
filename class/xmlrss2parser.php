<?php
// $Id: xmlrss2parser.php,v 1.6 2003/10/04 08:36:39 okazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
include_once XOOPS_ROOT_PATH."/modules/$mydirname/class/saxparser.php" ;
include_once XOOPS_ROOT_PATH."/modules/$mydirname/class/xmltaghandler.php" ;

class XhldXmlRss2Parser extends SaxParser
{
    var $_tempArr = array();
    var $_channelData = array();
    var $_imageData = array();
    var $_items = array();

    function XhldXmlRss2Parser(&$input)
    {
        $this->SaxParser($input);
		$this->useUtfEncoding();
        $this->addTagHandler(new XhldRssChannelHandler());
        $this->addTagHandler(new XhldRssTitleHandler());
        $this->addTagHandler(new XhldRssLinkHandler());
        $this->addTagHandler(new XhldRssGeneratorHandler());
        $this->addTagHandler(new XhldRssDescriptionHandler());
        $this->addTagHandler(new XhldRssContentEncodedHandler());
        $this->addTagHandler(new XhldRssCopyrightHandler());
        $this->addTagHandler(new XhldRssNameHandler());
        $this->addTagHandler(new XhldRssManagingEditorHandler());
        $this->addTagHandler(new XhldRssLanguageHandler());
        $this->addTagHandler(new XhldRssDcLanguageHandler());
        $this->addTagHandler(new XhldRssLastBuildDateHandler());
        $this->addTagHandler(new XhldRssWebMasterHandler());
        $this->addTagHandler(new XhldRssDcCreatorHandler());
        $this->addTagHandler(new XhldRssImageHandler());
        $this->addTagHandler(new XhldRssUrlHandler());
        $this->addTagHandler(new XhldRssWidthHandler());
        $this->addTagHandler(new XhldRssHeightHandler());
        $this->addTagHandler(new XhldRssItemHandler());
        $this->addTagHandler(new XhldRssCategoryHandler());
        $this->addTagHandler(new XhldRssPubDateHandler());
        $this->addTagHandler(new XhldRssDcDateHandler());
        $this->addTagHandler(new XhldRssCommentsHandler());
        $this->addTagHandler(new XhldRssSourceHandler());
        $this->addTagHandler(new XhldRssAuthorHandler());
        $this->addTagHandler(new XhldRssGuidHandler());
        $this->addTagHandler(new XhldRssTextInputHandler());
    }

	function setChannelData($name, $value)
	{
		if (!isset($this->_channelData[$name])) {
			$this->_channelData[$name] = $value;
		} else {
			$this->_channelData[$name] .= $value;
		}
	}

    function getChannelData($name = null)
    {
        if (isset($name)) {
            if (isset($this->_channelData[$name])) {
                return $this->_channelData[$name];
            }
            return false;
        }
        return $this->_channelData;
    }

    function setImageData($name, $value)
    {
        $this->_imageData[$name] = $value;
    }

    function getImageData($name = null)
    {
        if (isset($name)) {
            if (isset($this->_imageData[$name])) {
                return $this->_imageData[$name];
            }
            return false;
        }
        return $this->_imageData;
    }

    function setItems($itemarr)
    {
        $this->_items[] = $itemarr;
    }

    function getItems()
    {
        return $this->_items;
    }

    function setTempArr($name, $value, $delim = '')
    {
        if (!isset($this->_tempArr[$name])) {
            $this->_tempArr[$name] = $value;
        } else if( $name == 'pubdate' ) {
            $this->_tempArr[$name] = $value;
        } else if( $name == 'link' && substr( $value , 0 , 4 ) == 'http' ) {
            $this->_tempArr[$name] = $value;
        } else {
            $this->_tempArr[$name] .= $delim.$value;
        }
    }

    function getTempArr()
    {
        return $this->_tempArr;
    }

    function resetTempArr()
    {
        unset($this->_tempArr);
        $this->_tempArr = array();
    }
}

class XhldRssChannelHandler extends XmlTagHandler
{

    function XhldRssChannelHandler()
    {

    }

    function getName()
    {
        return 'channel';
    }
}

class XhldRssTitleHandler extends XmlTagHandler
{

    function XhldRssTitleHandler()
    {

    }

    function getName()
    {
        return 'title';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('title', $data);
            break;
        case 'image':
            $parser->setImageData('title', $data);
            break;
        case 'item':
        case 'textInput':
            $parser->setTempArr('title', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssLinkHandler extends XmlTagHandler
{

    function XhldRssLinkHandler()
    {

    }

    function getName()
    {
        return 'link';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('link', $data);
            break;
        case 'image':
            $parser->setImageData('link', $data);
            break;
        case 'item':
        case 'textInput':
            $parser->setTempArr('link', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssDescriptionHandler extends XmlTagHandler
{

    function XhldRssDescriptionHandler()
    {

    }

    function getName()
    {
        return 'description';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('description', $data);
            break;
        case 'image':
            $parser->setImageData('description', $data);
            break;
        case 'item':
        case 'textInput':
            $parser->setTempArr('description', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssContentEncodedHandler extends XmlTagHandler
{

    function XhldRssContentEncodedHandler()
    {

    }

    function getName()
    {
        return 'content:encoded';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('content', $data);
            break;
        case 'image':
            $parser->setImageData('content', $data);
            break;
        case 'item':
        case 'textInput':
            $parser->setTempArr('content', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssGeneratorHandler extends XmlTagHandler
{

    function XhldRssGeneratorHandler()
    {

    }

    function getName()
    {
        return 'generator';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('generator', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssCopyrightHandler extends XmlTagHandler
{

    function XhldRssCopyrightHandler()
    {

    }

    function getName()
    {
        return 'copyright';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('copyright', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssNameHandler extends XmlTagHandler
{

    function XhldRssNameHandler()
    {

    }

    function getName()
    {
        return 'name';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'textInput':
            $parser->setTempArr('name', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssManagingEditorHandler extends XmlTagHandler
{

    function XhldRssManagingEditorHandler()
    {

    }

    function getName()
    {
        return 'managingEditor';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('editor', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssLanguageHandler extends XmlTagHandler
{

    function XhldRssLanguageHandler()
    {

    }

    function getName()
    {
        return 'language';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('language', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssDcLanguageHandler extends XmlTagHandler
{

    function XhldRssDcLanguageHandler()
    {

    }

    function getName()
    {
        return 'dc:language';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('language', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssWebMasterHandler extends XmlTagHandler
{

    function XhldRssWebMasterHandler()
    {

    }

    function getName()
    {
        return 'webMaster';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('webmaster', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssDocsHandler extends XmlTagHandler
{

    function XhldRssDocsHandler()
    {

    }

    function getName()
    {
        return 'docs';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('docs', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssTtlHandler extends XmlTagHandler
{

    function XhldRssTtlHandler()
    {

    }

    function getName()
    {
        return 'ttl';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('ttl', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssTextInputHandler extends XmlTagHandler
{

    function XhldRssWebMasterHandler()
    {

    }

    function getName()
    {
        return 'textInput';
    }

    function handleBeginElement(&$parser, $attributes)
    {
        $parser->resetTempArr();
    }

    function handleEndElement(&$parser)
    {
        $parser->setChannelData('textinput', $parser->getTempArr());
    }
}

class XhldRssLastBuildDateHandler extends XmlTagHandler
{

    function XhldRssLastBuildDateHandler()
    {

    }

    function getName()
    {
        return 'lastBuildDate';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('lastbuilddate', $data);
            break;
        default:
            break;
        }
    }
}

class XhldRssImageHandler extends XmlTagHandler
{

    function XhldRssImageHandler()
    {
    }

    function getName()
    {
        return 'image';
    }
}

class XhldRssUrlHandler extends XmlTagHandler
{

    function XhldRssUrlHandler()
    {

    }

    function getName()
    {
        return 'url';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'image') {
            $parser->setImageData('url', $data);
        }
    }
}

class XhldRssWidthHandler extends XmlTagHandler
{

    function XhldRssWidthHandler()
    {

    }

    function getName()
    {
        return 'width';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'image') {
            $parser->setImageData('width', $data);
        }
    }
}

class XhldRssHeightHandler extends XmlTagHandler
{

    function XhldRssHeightHandler()
    {
    }

    function getName()
    {
        return 'height';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'image') {
            $parser->setImageData('height', $data);
        }
    }
}

class XhldRssItemHandler extends XmlTagHandler
{

    function XhldRssItemHandler()
    {

    }

    function getName()
    {
        return 'item';
    }

    function handleBeginElement(&$parser, $attributes)
    {
        $parser->resetTempArr();
    }

    function handleEndElement(&$parser)
    {
        $temp_arr = $parser->getTempArr() ;
        $parser->setItems( $temp_arr ) ;
    }
}

class XhldRssCategoryHandler extends XmlTagHandler
{

    function XhldRssCategoryHandler()
    {

    }

    function getName()
    {
        return 'category';
    }

    function handleCharacterData(&$parser, $data)
    {
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('category', $data);
            break;
        case 'item':
            $parser->setTempArr('category', $data, ', ');
        default:
            break;
        }
    }
}

class XhldRssCommentsHandler extends XmlTagHandler
{

    function XhldRssCommentsHandler()
    {

    }

    function getName()
    {
        return 'comments';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'item') {
            $parser->setTempArr('comments', $data);
        }
    }
}

class XhldRssPubDateHandler extends XmlTagHandler
{

    function XhldRssPubDateHandler()
    {

    }

    function getName()
    {
        return 'pubDate';
    }

    function handleCharacterData(&$parser, $data)
    {
        $time = -1 ;
        while( $time == -1 && $data != "" ) {
            $time = strtotime( $data ) ;
            $data = substr( $data , 0 , intval( strrpos( $data , ' ' ) ) ) ;
        }
        if( $time == -1 ) $time = time() ;
        switch ($parser->getParentTag()) {
        case 'channel':
            $parser->setChannelData('pubdate', $time);
            break;
        case 'item':
            $parser->setTempArr('pubdate', $time);
            break;
        default:
            break;
        }
    }
}

class XhldRssDcDateHandler extends XmlTagHandler
{
	var $previous_tzoffset = null ;

   function XhldRssDcDateHandler()
   {

   }

   function getName()
   {
       return 'dc:date';
   }

   function handleCharacterData(&$parser, $data)
   {
       $time = $this->dateW3cToUnix( $data ) ;
       if( $time <= 0 ) $time = time() ;

       switch ($parser->getParentTag()) {
       case 'channel':
           $parser->setChannelData('lastbuilddate', formatTimestamp( $time ) );
           break;
       case 'item':
           $parser->setTempArr('pubdate', $time);
           break;
       default:
           break;
       }
   }

	function dateW3cToUnix( $w3cDT )
	{
		$w3cDT = strtoupper( $w3cDT ) ;

		// for wrong format like dd-mm-yyyy hh:mm:ss
		if( preg_match( '/^(\d{1,2})[-\/\.](\d{1,2})[-\/\.](\d{4})(.*)$/' , $w3cDT , $regs ) ) {
			$w3cDT = "{$regs[3]}-{$regs[2]}-{$regs[1]}{$regs[4]}" ;
		}

		// for too detailed format like ss.ssss
		$w3cDT = preg_replace( '/T(\d{2})\:(\d{2})\:(\d{2})\.\d+/' , 'T$1:$2:$3' , $w3cDT ) ;

		// get the timezone
		$tzoffset = date( 'Z' ) ;
		if( $pos = strrpos( $w3cDT , 'Z' ) ) {
			// GMT
			$localdatetime = substr( $w3cDT , 0 , $pos ) ;
		} else if( ( $pos = strrpos( $w3cDT , '+' ) ) > 0 ) {
			$hourmin = explode( ':' , substr( $w3cDT , $pos + 1 ) ) ;
			if( ! empty( $hourmin[0] ) ) $tzoffset -= $hourmin[0] * 3600 ;
			if( ! empty( $hourmin[1] ) ) $tzoffset -= $hourmin[1] * 60 ;
			$localdatetime = substr( $w3cDT , 0 , $pos ) ;
			$this->previous_tzoffset = $tzoffset ;
		} else if( ( $pos = strrpos( $w3cDT , '-' ) ) > 7 ) {
			$hourmin = explode( ':' , substr( $w3cDT , $pos + 1 ) ) ;
			if( ! empty( $hourmin[0] ) ) $tzoffset += $hourmin[0] * 3600 ;
			if( ! empty( $hourmin[1] ) ) $tzoffset += $hourmin[1] * 60 ;
			$localdatetime = substr( $w3cDT , 0 , $pos ) ;
			$this->previous_tzoffset = $tzoffset ;
		} else {
			// no timezone (use previous tzoffset if exists)
			$localdatetime = $w3cDT ;
			if( isset( $this->previous_tzoffset ) ) $tzoffset = $this->previous_tzoffset ;
		}

		$localunixtime = strtotime( str_replace( 'T' , ' ' , $localdatetime ) ) ;
		if( $localunixtime == -1 ) return time() ;
		else return $localunixtime + $tzoffset ;
	}
}

class XhldRssGuidHandler extends XmlTagHandler
{

    function XhldRssGuidHandler()
    {

    }

    function getName()
    {
        return 'guid';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'item') {
            $parser->setTempArr('guid', $data);
        }
    }
}

class XhldRssAuthorHandler extends XmlTagHandler
{

    function XhldRssAuthorHandler()
    {

    }

    function getName()
    {
        return 'author';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'item') {
            $parser->setTempArr('author', $data);
        }
    }
}

class XhldRssDcCreatorHandler extends XmlTagHandler
{

    function XhldRssDcCreatorHandler()
    {

    }

    function getName()
    {
        return 'dc:creator';
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'channel') {
           $parser->setChannelData('webmaster', $data);
        }
    }
}

class XhldRssSourceHandler extends XmlTagHandler
{

    function XhldRssSourceHandler()
    {

    }

    function getName()
    {
        return 'source';
    }

    function handleBeginElement(&$parser, $attributes)
    {
        if ($parser->getParentTag() == 'item') {
            $parser->setTempArr('source_url', $attributes['url']);
        }
    }

    function handleCharacterData(&$parser, $data)
    {
        if ($parser->getParentTag() == 'item') {
            $parser->setTempArr('source', $data);
        }
    }
}
?>