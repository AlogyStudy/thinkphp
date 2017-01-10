<?php
	
	/**
	 * 角色管理
	 */

	class RoleModel extends Model {

		public function distributeAuth( $auth, $role_id ) {
			$ids = implode(',', $auth); 
			
			// 根据$ids查询全部的模块和操作方法
			$sql = "select auth_c, auth_a from sw_auth where auth_id in ($ids)";
			$info = $this->query($sql);
			
			$ac = "";
			foreach($info as $v) {
				if ( !empty($v['auth_c']) && !empty($v['auth_a']) ){
					$ac .= $v['auth_c'] . '-'. $v['auth_a'] . ',';
				}
			}			
			$ac = rtrim($ac, ',');
			
			// 拼凑SQL语句			
			$sql = "update sw_role set role_auth_ids='$ids', role_auth_ac='$ac' where role_id = " . $role_id;
			return $this->execute($sql);
			
		}
				
	}

?>