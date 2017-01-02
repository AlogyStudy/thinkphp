<?php
	header('Content-type:text/html; charset=utf-8');
	
	// 定义系统目录
	define('APP_PATH', '../');
	
	// 修改为调试模式
	define('APP_DEBUG', true);
	
	
	// 路径常量
//	define('SITE_URL', 'http://tp.com/'); // 网站地址
//	define('CSS_URL', SITE_URL . 'shop/go/public/css/'); // 前台页面CSS路径
//	define('IMAGE_URL', SITE_URL . 'shop/go/public/images'); // 前台页面图片路径常量

		// 	前台资源路径
		define('CSS_URL', '/shop/go/public/home/css/');
		define('IMAGE_URL', '/shop/go/public/home/images/');
		
		// 后台资源路径
		define('ADMIN_CSS_URL', '/shop/go/public/admin/css/');
		define('ADMIN_IMAGE_URL', '/shop/go/public/admin/img/');

	
	// TP框架核心框架核心程序引入
	require('../../ThinkPHP/ThinkPHP.php');
		
	
?>