<?php

	class UserModel extends Model {
		
		// 自动完成    // 自动完成定义
		protected $_auto = array(
//			array('填充字段', '填充内容', ['填充条件', '附加规则'])
			array('password', 'md5', 3, 'function'),
			array('user_time', 'time', 1, 'function')
		);
		
		// 自动映射, 把一个 form表单中的name和 数据库中的字段对应起来
		protected $_map = array(
			'email' => 'user_email',
			'qq' => 'user_qq'
		);		
		
		// 是否批处理验证
    protected $patchValidate   =  true;
		
		// 自动验证规则定义
		protected $_validate = array(
			// 用户名
			array('username', 'require', '用户名必须填写'),
			
			// 密码
			array('password', 'require', '密码必须填写'),
			
			// 确认密码
			array('password2', 'require', '重复密码必须填写'), 
			array('password2', 'password', '确认密码必须一样', 0, 'confirm'),
			
			// 邮箱
			array('user_email', 'require', '邮箱必须填写'), 
			array('user_email', 'email', '邮箱格式必须正确'),
			
			// qq号码 // 全部是数字 // 第一个为非零
			array('user_qq', 'require', 'qq必须填写'),
			array('user_qq', '/^[1-9]\d{4,13}$/', 'qq格式必须正确'),
			
			// 手机号码
			array('user_tel', 'require', '手机号必须填写'),
			array('user_tel', '/^1[34578]\d{9}$/', '手机号格式必须正确'),
			
			// 学历 // value值必须在范围之内  2,3,4,5
			array('user_xueli', array(2, 3, 4, 5), '学历必须选择一项', 0, 'in'),
			
			// 爱好 // 必须选择一个项目以上
			array('user_hobby', 'check_hobby', '爱好必须选择', 1, 'callback')
			
		); 
		
		/**
		 * 验证爱好
		 * @param {Array} $hobby user_hobby 值 
		 * // e.g 1 [篮球]  2 [足球] 3 [排球] 4 [棒球]
		 * @return {Boolean} 验证是否通过
		 */
		public function check_hobby( $hobby ) {
//			$_POST['user_hobby']

				if ( count($hobby) < 2 ) {
					return false;
				} else {
					return true;
				}
				
		}
				
		public function checkNamePasswrod() {
						
		}
		
	}

?>