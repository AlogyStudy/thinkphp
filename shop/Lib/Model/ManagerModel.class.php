<?php

	/**
	 * 后台管理员模型
	 */
	 
	class ManagerModel extends Model {
		
				// 自动完成    // 自动完成定义
		protected $_auto = array(
//			array('填充字段', '填充内容', ['填充条件', '附加规则'])
			array('mg_pwd', 'md5', 3, 'function'),
			array('mg_time', 'time', 1, 'function')
		);
		
		
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
		
		/**
		 * 增加管理员
		 * @param {Array} $info 管理员信息
		 * @return 
		 */
		 
		public function addManger( $info ) {
			
			if ( empty($info) ) {
				return false;
			}
			
			$info['mg_pwd'] = md5('123456');
			
			return $this->add($info);
			
		} 
		
	} 

?>