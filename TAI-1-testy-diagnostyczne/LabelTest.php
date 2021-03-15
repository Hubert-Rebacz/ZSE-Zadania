<?php
require_once(dirname(__FILE__).'/label.php');
use PHPUNIT\Framework\TestCase;
class LabelTest extends TestCase{

	public function testDisplay(){
		$obj1 = new Label('Etykieta 1');
		$cmd1 = $obj1->display();
		$exp1 = '<LABEL>Etykieta 1</LABEL>';
		$this->assertEquals( $exp1, $cmd1);

		$obj2 = new Label('Etykieta 1',"inpId");
		$cmd2 = $obj2->display();
		$exp2 = '<LABEL for="inpId">Etykieta 1</LABEL>';
		$this->assertEquals( $exp2, $cmd2);
	}
}
?>