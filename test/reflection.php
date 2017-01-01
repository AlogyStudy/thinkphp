<?php

	class Persion {
		public $name = 'zf';
		public function say() {
			echo 'say：'. $this->name, '<br/>';
		}
		public function tan($c1, $c2) {
			echo '<br/>' . $c1 . ' '. $c2;
		}
	}
	
	
	$p = new Persion();
//	$p->say();
	
	// 利用反射对象调用方法
	$method = new ReflectionMethod('Persion', 'say'); // 反射方法对象 
	$method->invoke($p); 

	$method2 = new ReflectionMethod('Persion', 'tan'); 
	$method2->invokeArgs($p, array('pink', 'red'));

?>