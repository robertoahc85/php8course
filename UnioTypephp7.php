<?php
class Number {
	/**
	 * @var int|float $number
	 */
	private $number;

	/**
	 * @param int|float $number
	 */
	public function setNumber($number) {
		$this->number = $number;
	}

	/**
	 * @return int|float
	 */
	public function getNumber() {
		return $this->number;
	}
}
?>