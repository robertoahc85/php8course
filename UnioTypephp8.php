<?php
class Number {
	private int|float $number;

	public function setNumber(int|float $number): void {
		$this->number = $number;
	}

	public function getNumber(): int|float {
		return $this->number;
	}
}
?>