<?php
class Label {
	private $for = false;
	private $content;
	private $hasCtrl = false;
	private $desc;

	public function __construct(
		$content,
		$id = null,
		$description = null)

		{
		$this->for = $id;
		$this->content = $content;
		$this->desc = $description;
		}

		public function setFor($id){
			$this->for = $id;
		}
		public function getFor($attr=false){
			return ($attr===false) ? $this->for : ' for="'.$this->for.'"';
		}
		public function hasFor(){}

		public function setContent($value){
			$this->content = $value;
		}
		public function getContent(){
			return $this->content;
		}
		public function setDesc($value){
			$this->desc = $value;
		}
		public function getDesc(){
			return $this->desc;
		}
		public function hasDesc(){}
		public function display(){

			$lbl = "<LABEL";

		if($this->for !== null)
			$lbl.= $this->getFor(true);
			$lbl.= ">";
			$lbl.= $this->getContent();
			$lbl.= "</LABEL>";
			return $lbl;
		}
}
		?>
