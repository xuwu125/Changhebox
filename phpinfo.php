<?php
/**
 * this is php file
 * 测试一下PHP文件 
 */

define("Hello","World");
define("DEBUG",true);
define("SYSTEMOS",'Linux');

class a{
	function b(){
	
	}
	function c(){}
}

class d extends a
{
	var $b=null;	
	function init(){
		$this->b=new a();
	}
}

$hello=new d();
$hello->init();
echo SYSTEMOS;

phpinfo();


?>
