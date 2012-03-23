<?php
/**
 * this is php file
 * 测试一下PHP文件 
 */

define("Hello","World");
define("DEBUG",true);
define("SYSTEMOS",'Linux');

class a{
    
    /**
     * 这是一个备注
     * 我在这里增加一条备注看看
     */
	function b(){
        print "haha";
	}
    /**
     *  这一个方法的备注
     */
	function c(){}
}

class d extends a
{
	var $b=null;	
	function init(){
		$this->b=new a();
        $this->b->b();
	}
}

$hello=new d();
$hello->init();
echo SYSTEMOS;

phpinfo();


?>
