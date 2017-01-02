<?php

	/**
	 * 后台商品控制器
	 */
	class GoodsAction extends Action {
		
		// 商品列表
		public function showList() {
			// 调用模型
//			$goods_model = new GoodsModel();
//			var_dump($goods_model);
			
//			$qq = new QqModel();
			
//			$goods_model = D('Goods');
//			var_dump($goods_model);	
			
//			$model = new Model(); // 实例化基类
			$model = M('');	// 调用M(); 函数 // M函数用于实例化一个没有模型文件的Model
			var_dump($model);
			
			$this->display();
		}
		
		// 添加商品
		public function add() {
			$this->display();
		}
		
		// 修改商品
		public function upd() {
			$this->display();
		}
		
	} 

?>