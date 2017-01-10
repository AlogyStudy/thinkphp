<?php

  /**
   * 商品model模型类
   */
  class GoodsModel extends Model {

		/**
		 * 获取商品信息
		 */
		public function getInfo() {
			
			// 1. 首先要去缓存中获取商品信息
			$g = S('info');
			
			// 2. 缓存有商品信息，直接返回.
			if ( !empty($g) ) {
				return $g;
			} else {
				$g = 'apple'. time();
				
				// 数据放入缓存 
				S('info', $g, 10); // 设置时间
				// 返回数据
				return $g;
			}
			
		}
			       
  }

?>