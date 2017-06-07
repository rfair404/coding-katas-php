<?php
namespace CodingKatasPHP;
class Biography{
	private $name;

	public function get_name(){
		return $this->name;
	}
	public function set_name($fname, $lname){
		$this->name = $fname . ' ' . $lname;
	}
}