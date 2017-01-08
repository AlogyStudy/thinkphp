<?php

	/**
	 * 后台管理员控制器
	 */
	class ManagerAction extends Action {
		// 登陆系统
		public function login() {
			
			
			if ( !empty($_POST['captcha']) && md5($_POST['captcha']) == $_SESSION['verify'] ) {
				
			}
			
			var_dump($_POST);
			
			$this->display();
		}
		
		
		// 生成验证码
		public function verifyImg1() {
			// 手动加载 Image类
			// 项目中 的类
//			import('@.Model.QqModel.class.php'); // Lib/Model/QqModel.class.php
			// 核心框架中的类文件
//				import('think.car.dirver'); // ThinkPHP/Lib/car/dirver.class.php
			// 扩展类文件				
//			import('ORG.color.pink'); // ThinkPHP/Extend/Library/ORG/color/pink.class.php

//			import('ORG/Util/Image');
			// 找到文件为：// Lib/apple/bananer.good.flash.class.php
//			import('@.apple.bananer#good#flash'); // 文件名为：`bananer.good.flash.class.php` 
			
//			echo Image::buildImageVerify();
		}
		
		// 生成验证码
		public function verifyImg() {
			import('ORG/Util/Image');
			echo Image::buildImageVerify();
		} 
		
	}	 

?>