<?php

	/**
	 * 后台管理员模型
	 */
	 
	class ManagerModel extends Model {
		
		/**
		 * 用户名和密码验证
		 * @param {String} $name 用户名
		 * @param {String} $pwd 密码
		 * @return {Mixin} 匹配到的用户名和密码 或者 false
		 */
		public function checkNamePwd($name, $pwd) {
			
			// 用户名和密码是否存在
			$name_info = $this->getByMg_name($name);
			
			// 用户名和密码是否正确
			if ( $name_info != null ) {
				
				// 密码
				if ( $name_info['mg_pwd'] != $pwd ) {
					return false;
				} else {
					return $name_info;
				}
				
			} else {
				return false;
			}  
			
		}
		
	} 

?>