<?php

class Person {

	// access modifiers, public=allow
	// protected = strict, private = only this class
	public $name;

	public $height;

	private $social_insurance;

	private $pin_number;


	function __construct($persons_name) {
		$this->name = $persons_name;
	}

	public function set_name($new_name) {
		$this->name = $new_name;
	}

	public function get_name() {
		return $this->name;
	}

	public function set_pin($new_pin) {
		$this->pin_number = $new_pin;
	}

	protected function get_pin() {
		return $this->pin_number;
	}

	public function pin_hack() {
		return $this->pin_number;
	}
}

// USING INHERITANCE. KEYWORD EXTENDS. MAKING A CLASS FROM ANOTHER CLASS

class Employee extends Person {

	function __construct($employee_name) {
		$this->set_name($employee_name);
	}

	public function set_si($si) {
		$this->social_insurance = $si;
	}

	public function get_si() {
		return $this->social_insurance;
	}

	public function get_pin_public() {
		person::get_pin;
	}

}













?>