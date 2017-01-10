<?php

	/**
	 * 普通控制器的父类
	 */
	class AdminAction extends Action {
		
		// 控制用户访问的模块和操作方法
		public function __construct() {
			parent::__construct(); // 执行父类的构造函数
			
			// 获取当前请求的模块和方法 ， 然后与角色拥有的模块和方法权限对比
			$model = MODULE_NAME;
			$method = ACTION_NAME;
			
			$AC = $model . '-' . $method; // Goods-add;
			
			$m = new Model();
			// 获取权限
			$sql = "select r.role_auth_ac from sw_manager as m left join sw_role as r on m.mg_role_id=r.role_id where m.mg_id = " . $_SESSION['mg_id'];
			
			$SqlAC = $m->query($sql);
			
			$SqlAC = $SqlAC[0]['role_auth_ac'];
			
			if (stripos($SqlAC, $AC) === false && stripos($SqlAC, $AC) != 1) {
				$this->error('没有权限访问', U('Index/right'));
				exit('没有权限访问');
			}
			
		}
		
	} 

?>