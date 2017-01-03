<?php

	/**
	 * 后台商品控制器
	 */
	class GoodsAction extends Action {
		
		// 商品列表
		public function showList1() {
			
			// 查询数据
			$goods_model = new GoodsModel();
			// 查询全部数据
			$info = $goods_model->select(); // select(记录主键值); 方法查询数据 // 返回二维数据
			// 查询一条记录
//			$info = $goods_model->select(7);
			// 查询多条记录
//			$info = $goods_model->select('17, 20, 23');
			
			// 返回一维数组， 每次只返回一条数据
//			$info = $goods_model->find(7);  
			
			// 查询固定字段 指定查询字段 支持字段排除
//			$info = $goods_model->field('goods_name, goods_price, goods_number, goods_create_time')->select();

			// 查询条数
//			$info = $goods_model->limit(长度)
//			$info = $goods_model->limit(偏移量, 长度)
//			$info = $goods_model->limit(5, 5)->select();	

			// 排序
//			$info = $goods_model->order(条件 倒序/正序);
//			$info = $goods_model->order('goods_price desc')->select();

//				$info = $goods_model->order('goods_price desc')->limit(5)->select(); // order()是Model不存在的方法，会执行魔术方法`__call()`

				// 设置条件
//				$info = $goods_model->where('goods_price > 5000')->select();

				// 设置表名
//				$info = $goods_model->table('sw_goods')->select();

				// 分组
//				$info = $goods_model->group('goods_category_id')->select();	

			// 数据
			$this->assign('info', $info);
			
			// 显示			
			$this->display();
		}
		
		
		public function showList() {
			
			$goods_model = new GoodsModel();
			
//			$info = $goods_model->getByGoods_price('5999');
			
//			$info = $goods_model->having('goods_name like "A%"')->select();
			
			
			// 聚合函数
//			$info = $goods_model->where('goods_id>50')->select();
//			$num = $goods_model->where('goods_id>50')->count(); // SELECT COUNT(*) AS tp_count FROM `sw_goods` WHERE ( goods_id>50 ) LIMIT 1 
//			echo $num;
//			
//			$total_price = $goods_model->where('goods_id>50')->sum('goods_price'); // SELECT SUM(goods_price) AS tp_sum FROM `sw_goods` WHERE ( goods_id>50 ) LIMIT 1
//			echo $total_price;
//			
//			$this->assign('info', $info);

				// 执行原生SQL
				// select g.goods_name, g.goods_price, c.cat_name from sw_goods as g left join sw_category as c on g.goods_category_id = c.cat_id;
				$sql = "select g.goods_name, g.goods_price, c.cat_name from sw_goods as g left join sw_category as c on g.goods_category_id = c.cat_id";
				$info = $goods_model->query($sql);
			
				$this->assign('info', $info);				
			
			$this->display(); 
				
		}
		
		// 添加商品
		public function add() {
			
			$goods_model = new GoodsModel();
			
			// 实现数据添加
			// 数组下标与数据库字段名一致.
			$data = array(
				'goods_name' => 'htc100',
				'goods_price' => '3999',
				'goods_numer' => 45,
				'goods_weight' => 103
			);
			
			$rst = $goods_model->add($data);
			
			var_dump($rst);
			
			$this->display();
		}
		
		// 修改商品
		public function upd() {
			$this->display();
		}
		
	} 

?>