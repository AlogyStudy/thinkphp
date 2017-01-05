<?php

	class UserModel extends Model {
		
		// 是否批处理验证
    protected $patchValidate   =  true;
		
		// 自动验证规则定义
		protected $_validate = array(
			// 用户名密码
			array('username', 'require', '用户名必须填写'),
			// 密码
			array('password', 'require', '密码必须填写'),
			array('password2', 'require', '重复密码必须填写')
		); 
		
				
		public function checkNamePasswrod() {
						
		}
		
	}

?>