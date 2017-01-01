<?php
	
	/**
	 * 用户控制器
	 */
	class UserAction extends Action {
		
		// 登陆操作
		public function login() {
			// 创建路由 U();
//			echo U('User/aaa') , '<br />';
			// 调用模板
			$this->display();			
		}
		
		// 注册操作
		public function register() {
			$this->display();
		} 
				
	} 

?>