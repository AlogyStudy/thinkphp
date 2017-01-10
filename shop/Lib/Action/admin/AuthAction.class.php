<?php

	/**
	 * 权限控制器
	 */
	class AuthAction extends Action {
		/**
		 * 展示
		 */
		public function showlist() {
			
			// 获得全部权限
			$info = D('Auth')->order('auth_path')->select();
			
			$this->assign('info', $info);
			
			$this->display();
		}
		
		/**
		 * 添加权限
		 */
		public function add() {
			
			if ( !empty($_POST) ) {
			
				$auth = new AuthModel();
				$rst = $auth->saveAuth($_POST);
				
				if ( $rst ) {
					$this->success('添加权限成功', U('Auth/showlist'));
				}
							
			} else {
				
				// 获取全部权限
				$info = D('Auth')->where('auth_level<2')->order('auth_path')->select();
				$this->assign('info', $info);
				
				foreach( $info as $k => $v ) {
					if ($v['auth_level'] == 1) {
						$info[$k]['auth_name'] = '-/'. $v['auth_name'];
					} else if ( $v['auth_level'] == 2 ) {
						$info[$k]['auth_name'] = '-/-/' . $v['auth_name'];
					}
				}
				
				// 组装 array([]);
				$authinfo = array();
				foreach($info as $v) {
					$authinfo[$v['auth_id']] = $v['auth_name'];
				}
				
				$this->assign('authinfo', $authinfo);
				$this->display();
			}
			
		}
	}

?>