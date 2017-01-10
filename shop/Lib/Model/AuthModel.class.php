<?php

	/**
	 * 权限模型
	 */
	class AuthModel extends Model {
		
		/**
		 * 增加权限
		 * @param {Array} $info 权限信息
		 * @return 
		 */
		public function saveAuth($info) {
			$auth_c = $info['auth_c'];
			$auth_a = $info['auth_a'];
			$auth_name = $info['auth_name'];
			$auth_pid = $info['auth_pid'];
			
			$auth_id = $this->add($info); // 返回id 值
			
			// auth_path // 全路径 
			// 如果权限是顶级权限  auth_path === auth_id本身记录id值;
			// 如果权限不是顶级权限  auth_path === 父级的auth_id - 本身id
			if ( $auth_pid == 0 ) {
				$auth_path = $auth_id;   
			} else {
				// 获得父级的auth_path
				$p_info = $this->find($auth_pid);
				$p_auth_path = $p_info['auth_path'];
				
				$auth_path = $p_auth_path  . '-' . $auth_id;
			}
			
			// 等级 auth_level
			// 根据auth_level处理 10-11-35 查找'-'的个数就是auth_level的值
			$auth_level = count(explode('-', $auth_path))-1;
			
			// update
			$data = array(
				'auth_id' => $auth_id,
				'auth_path' => $auth_path,
				'auth_level' => $auth_level
			);
			
			return $this->save($data);
		}
		
	} 
?>