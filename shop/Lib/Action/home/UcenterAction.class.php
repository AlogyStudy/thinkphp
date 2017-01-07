<?php

	/**
	 * 用户中心控制器
	 */
	class UcenterAction extends Action {
		
		// 欢饮页
		public function welcome() {
			$this->display();
		} 
		
		// 订单
		public function order() {
			$this->display();
		}
		
		// 地址
		public function address() {
			$this->display();
		}
		
	}	 
?>