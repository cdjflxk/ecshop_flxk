<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

import('TagLib');
import("@.Control.XkControl");
/**
 +------------------------------------------------------------------------------
 * CX标签库解析类
 +------------------------------------------------------------------------------
 * @category   Think
 * @package  Think
 * @subpackage  Template
 * @author    liu21st <liu21st@gmail.com>
 * @version   $Id$
 +------------------------------------------------------------------------------
 */
class TagLibXkdata extends TagLib
{//类定义开始

    // 标签定义
    protected $tags   =  array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'xkdata'=>array('attr'=>'action','level'=>1),
        );
        
    protected $xkControl = null;

    /**
     +----------------------------------------------------------
     * xkdata标签解析
     * 在模板中定义常量 支持变量赋值
     * 格式： <xkdata action="" result=""/>
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $attr 标签属性
     * @param string $content  标签内容
     +----------------------------------------------------------
     * @return string
     +----------------------------------------------------------
     */
    public function _xkdata($attr,$content)
    {
    	$xkControl = XkControl::getInstance();
        $tag      = $this->parseXmlAttr($attr,'xkdata');
        $action   =  '\''.$tag['action']. '\'';
        $result = "";
        if(!empty($action)) {
            $result   =  $xkControl->dispach($action);
        }else{
            Log::Write("no action be defined","ERR");
        }
        return $result;
    }

}//类定义结束
?>