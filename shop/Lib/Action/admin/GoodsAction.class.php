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
		
		
		public function showList2() {
			
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
				$sql = "select g.goods_id, g.goods_name, g.goods_price, c.cat_name from sw_goods as g left join sw_category as c on g.goods_category_id = c.cat_id";
				$info = $goods_model->query($sql);
			
				$this->assign('info', $info);				
			
			$this->display(); 
				
		}

		public function showList() {
			
			$goods_model = new GoodsModel();
			
			// 引入分页类
			import('@.Components.Page');
			// 计算当前记录总数目
			$total = $goods_model->count();
			// 每页5条
			$per = 10;
			// 实例化分页对象
			$page = new Page($total, $per);
			// 获得页面列表
			$page_list = $page->fpage(array(3, 4, 5, 6, 7, 8));
			
			// SQL语句，获得每页的信息
			$sql = "select * from sw_goods " . $page->limit;
			$info = $goods_model->query($sql);
			
			// 设置数据
			$this->assign('info', $info);
			$this->assign('page_list', $page_list);
			// 显示
			$this->display();
			
		}
		
		// 添加商品
		public function add1() {
			
			$goods_model = new GoodsModel();
			
			// 实现数据添加
			// 数组下标与数据库字段名一致.
//			$data = array(
//				'goods_name' => 'htc100',
//				'goods_price' => '3999',
//				'goods_numer' => 45,
//				'goods_weight' => 103
//			);
			
//			$rst = $goods_model->add($data);

			// AR方式实现数据添加
			// 对象调用不存在的属性需要调用魔术方法`__set()`
			$goods_model->goods_name = 'iphone7puls';
			$goods_model->goods_price = '5700';
			$goods_model->goods_number = 41;
			$goods_model->goods_weight = 100;
			
			$rst = $goods_model->add(); // 返回影响记录的条数
			
			if ( $rst ) {
				$this->success('添加成功', __URL__ . '/showList');
			}
			
			$this->display();
		}
		
		// 添加商品
		public function add() {
			
			// Goods模型
			$goods_model = new GoodsModel();
			if ( !empty($_POST) ) {
					
				// 获取数据
					// 数组方式
//				$data = $_POST;
//				$cnt = $goods_model->add($data);

					// AR方式
//					foreach( $_POST as $k => $v ) {
//						$goods_model->$k = $v;
//					}
//					$goods_model->add();

				// 收集表单数据
				$data = $goods_model->create();
				$rst = $goods_model->add($data);
				
				if ( $rst ) {
					$this->success('添加成功', __URL__ . '/showList');
				}
				 
					
			} else {
				// 展示表单
				$this->display();
			}
			
		} 
		
		// 修改商品
		public function upd1() {
			
			$goods_model = new GoodsModel();
			
			// 修改数据， 需要设置主键ID和where条件
//			$data = array(
//				'goods_id' => 55,
//				'goods_name' => '红米',
//				'goods_price' => 4000
//			);
//			$rst = $goods_model->save($data); // 返回受影响记录的数目
//
//			$data = array(
//				'goods_name' => '香米',
//				'goods_price' => 4000
//			);
//			$rst = $goods_model->where('goods_id=57')->save($data); 
//			echo $rst;

			$goods_model->goods_id = 58;
			$goods_model->goods_name = 'APPLE';
			$goods_model->goods_price = 4000;
			$goods_model->save();
			
			$goods_model->goods_name = 'huawei';
			$goods_model->goods_price = 4000;
			$snt = $goods_model->where('goods_id=56')->save();
			
			echo $snt;
			
			$this->display();
		}
		
		// 修改商品
		public function upd( $goods_id = 1 ) {
		
// 获取参数形式
// http://www.tp.com/index.php?m=控制器&a=操作&goods_id=100&goods_price=2300
// http://www.tp.com/index.php/控制器/操作/参数1/值1/参数2/值2
// function upd( 参数1, 参数2 ) {
	// $_GET['goods_id'];
// }
			
			$goods_model = new GoodsModel();
			
			if ( !empty($_POST) ) {
				
				// 修改表单	
				$goods_model->create(); // 字段中需要 主键
				$rst = $goods_model->save();
				
				// 有修改数据
				if ( $rst ) {
					$this->success('修改成功', __URL__ .'/showList');
				} 
								
			} else {
				
				// 查询数据
				$info = $goods_model->find($goods_id);
				// 设置值
				$this->assign('info', $info);
				
				$this->display();
			}
			
		}
		
		// 设置缓存
		public function sSet() {
			// 缓存周期，默认永久。 增加缓存有效期
			S('username', 'admin'.time(), 10); // 1800 半个小时
			S('goods_info', array('apple', 'WeChat'));
		}
		
		// 获取缓存
		public function gGet() {
			var_dump(S('goods_info'));
			echo S('username');
		}
		
		// 删除缓存
		public function dDel() {
			S('username', null);
		}	
		
	} 

?>