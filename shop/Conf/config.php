<?php
return array(
	// '配置项'=>'配置值'
	
	// 'URL_MODEL'             =>	0,            // 设置路由模式
	
	'APP_GROUP_LIST'        =>	'home,admin', // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
	
  'DEFAULT_GROUP'         =>	'home',       // 默认分组
  
  
  // 数据库
  'DB_TYPE'               =>	'mysql',      // 数据库类型
  'DB_HOST'               =>	'localhost',  // 服务器地址
  'DB_NAME'               =>	'shop',       // 数据库名
  'DB_USER'               =>	'root',       // 用户名
  'DB_PWD'                =>	'',           // 密码
  'DB_PORT'               =>	'',           // 端口
  'DB_PREFIX'             =>	'sw_',        // 数据库表前缀
  'DB_FIELDTYPE_CHECK'    =>	false,        // 是否进行字段类型检查
  
  // 出于性能考虑，要把数据表字段放入缓存中，下次访问就避免执行SQL语句重复执行。 
  // 前提，是生产模式,字段缓存有效.
  'DB_FIELDS_CACHE'       =>	true,         // 启用字段缓存

  
  'TMPL_ENGINE_TYPE'	  	=>	'Smarty',     // 修改模板引擎
  
  'SHOW_PAGE_TRACE' 		  =>   true,   // 显示页面Trace信息
  
  // 修改smarty参数信息
  'TMPL_ENGINE_CONFIG'    =>  array(
  	'left_delimiter' => '{',
  	'right_delimiter' => '}'
	)  
	
);
?>