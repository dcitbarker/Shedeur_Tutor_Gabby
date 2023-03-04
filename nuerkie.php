<?php
class Shapes{
    private $name;
    private $age;

	public function getName() {
		return $this->name;
	}

	public function setName($value) {
		$this->name = $value;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($value) {
		$this->age = $value;
	}
}


class Circle extends Shapes{



}



abstract class aShape{

    private $name;

	public function getName() {
		return $this->name;
	}

	public function setName($value) {
		$this->name = $value;
	}

    abstract function calculateAge();
}

class Area extends aShape{


	public function calculateAge() {

	}
}