<?php

	/**
	 * 后台主架构控制器
	 */
	class IndexAction extends  Action {
		
		// 后台主页面
		public function index() {
			$this->display();
		}
		
		// 头部
		public function head() {
			// 获得全部常量信息
//			var_dump(get_defined_constants(true));
			$this->display();
		}
		
		// 左边
		public function left() {
			
			// 用户 -- 角色 -- 权限
			// $_SESSION['mg_id'];
			// manager role auth
			
			$model = new Model();
			$sql = "select r.role_auth_ids from sw_manager as m join sw_role as r on m.mg_role_id = r.role_id where m.mg_id = " .$_SESSION['mg_id'];

			
			if ( $_SESSION['mg_id'] != 1 ) {
				$info = $model->query($sql);
				$auto_ids = $info[0]['role_auth_ids'];
			}	
			
			// 查询权限
			// 查询父权限
			$sql = "select * from sw_auth where auth_level=0";
			if ($_SESSION['mg_id'] != 1) {
				$sql .= " and auth_id in ($auto_ids)";
			}
			 
			$p_auth_info = $model->query($sql);
			// 查询子权限
			$sql = "select * from sw_auth where auth_level=1";
			if ( $_SESSION['mg_id'] != 1 ) {
				$sql .= " and auth_id in ($auto_ids)";
			}
			$s_auth_info = $model->query($sql);
			
			$this->assign('p_auth', $p_auth_info);
			$this->assign('s_auth', $s_auth_info);
			
			$this->display();
		}
		
		// right
		public function right() {
			$this->display();
		}
		
		
		
	}
	 
?>