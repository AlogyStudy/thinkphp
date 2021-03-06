<?php

	/**
	 * 后台管理员控制器
	 */
	class ManagerAction extends Action {
		// 登陆系统
		public function login() {
			
			// 读取语言变量信息 
			// L(name); 读取指定语言信息
			// L();  把全部语言信息以数组信息返回
			$lang = L();
			
			if ( !empty($_POST) ) {
				
				// 验证码
				if ( md5($_POST['captcha']) == $_SESSION['verify'] ) {
						
						// 用户名和密码 ，有效性
						// 数据模型中自定义方法校验用户名和密码
						$manager_model = D('Manager');
						
						// 校验密码
						$user_info = $manager_model->checkNamePwd($_POST['mg_name'], $_POST['mg_pwd']);
						
						// 判断密码
						if ( $user_info != false ) {
							
							// 持久化用户信息(id和名字)
							session('mg_name', $user_info['mg_name']);
							session('mg_id', $user_info['mg_id']);
							
							// admin/Index/index
		//					$this->redirect('Index/index', array('id'=>100, 'age'=>30), 5, '5秒后要跳转');
							// 页面重定向
							$this->redirect('Index/index');
						} else {
							echo '用户名或密码错误';
						}
											
				} else {
					echo '验证码不正确';
				}
			}
			
			$this->assign('lang', $lang); 	
			$this->display();
		}
		
		
		// 退出系统
		public function logout() {
			
			// 删除session信息
			session('mg_name', null); // 删除用户名
			session('mg_id', null); // 删除id
			$this->redirect('Manager/login');
			
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
		
		
		public function showlist() {
			// 获得全部管理员信息
			$manager = new ManagerModel();
			$info = $manager->select();
			
			// 获得角色信息
			$role = new RoleModel();
			$role = $role->select();
			$role_info = array();
			foreach($role as $v) {
				$role_info[$v['role_id']] = $v['role_name']; 
			}
			
			$this->assign('role_info', $role_info);
			
			$this->assign('info', $info);
			$this->display();
		}
		
		public function add() {
			
			if ( !empty($_POST) ) {
	
					
				$manager = new ManagerModel();
				$data = $manager->create();
				$rst = $manager->addManger($data);
				
				if ( $rst ) {
					$this->success('添加管理员成功', U('Manager/showlist'));
				}
				
			} else {
				
				// 获得角色信息
				$role = new RoleModel();
				$role = $role->select();
				$role_info = array();
				foreach($role as $v) {
					$role_info[$v['role_id']] = $v['role_name']; 
				}
				
				$this->assign('role_info', $role_info);
				
				$this->assign('info', $info);
				
				$this->display();
			}
			
		}	
		
	}	 

?>