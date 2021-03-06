<?php
	
	/**
	 * 用户控制器
	 */
	class UserAction extends Action {
		
		// 空操作的外部定义方法
//		public function _empty($method, $args) {
//			echo '<h1>:(</h1><div>该方法不存在</div>';
//		}
		
		// 登陆操作
		public function login() {
			// 创建路由 U();
//			echo U('User/aaa') , '<br />';
			// 调用模板
			$this->display();
			
			
			// A函数用于实例化Action 格式：[项目://][分组/]模块 
//			$user = A('home/User');
//			$user->number();
			
			// 远程调用模块的操作方法 URL 参数格式 [项目://][分组/]模块/操作
//			echo R('home/User/number');
			
		}
		
		// 注册操作
		public function register() {
			
			$user_model = new UserModel();
			var_dump($_POST);
			
			if ( !empty($_POST) ) {
				
				// 表单验证
				$result = $user_model->create();
				var_dump($result);
				if ( $result ) {
					
					// 爱好的数组变为字符串
					$user_model->user_hobby = implode($_POST['user_hobby'], ',');
					
					// 加密密码
//					$user_model->password = md5($_POST['password']);
					
					// 自动完成 加密密码
					
					$user_id = $user_model->add();
					
					if ( isset($user_id) ) {
//						echo '注册成功';
						// 写入session
						session('username', $_POST['username']);
						$this->redirect('/', '注册成功,即将跳转', 3);
					} else {
						echo '注册失败';
					}
				} else {
					var_dump($user_model->getError());
				}
				
			} else {
				$this->display();
			}
			
		} 
		
		/**
		 * 退出登陆
		 */		
		public function logout() {
			
			// 清除session信息
			session(null);
			// 跳转登录页
			$this->redirect('User/register', '退出成功', 3);
			
		}
		
		public function number() {
			
		}
		
	} 

?>