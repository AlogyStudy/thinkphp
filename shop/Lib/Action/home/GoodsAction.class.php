<?php

	/**
	 * 商品控制器
	 */
	class GoodsAction extends Action {
		
		// 展示商品
		public function showList() {
			$this->display();
		}
		
		// 查看商品的详细信息
		public function detail() {
			$this->display();
		}
		
	} 

?>
