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
			$this->display();
		}
		
		// right
		public function right() {
			$this->display();
		}
		
		
		
	}
	 
?>