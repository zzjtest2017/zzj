<?php
/**
 * 框架主体文件引入
 * @author zzj
 */
// no direct access
defined( 'EXEC' ) or die( 'Restricted access' );
//load error class
require_once( PATH_CLASS.DS.'error.class.php'); //包含错误处理文件
//load date class
require_once( PATH_CLASS.DS.'date.class.php' ); //包含基类文件
//load base class
require_once( PATH_CLASS.DS.'base.class.php' ); //包含基类文件
require_once( PATH_CLASS.DS.'control.class.php'); //控制器
require_once( PATH_CLASS.DS.'model.class.php'); //模型
//load base function
require_once( PATH_COMMON.DS.'fun'.DS.'function.php'); //公共方法
//load base config
require_once( PATH_COMMON.DS.'conf'.DS.'config.php'); //公共配置文件
//不同的目录用不同的URL方式
require_once( PATH_BASE.DS.'includes'.DS.'router.inc.php' );

