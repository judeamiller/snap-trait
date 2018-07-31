<?php

namespace Judeamiller\SnapTrait;


trait StringedInstrument {
	protected $requiresBow;

	public function getRequiresBow(): bool {
		return($this->requiresBow);
	}

	/**
	 * @param mixed $requiresBow
	 */
	public function setRequiresBow(bool $newRequiresBow): void {
		$this->requiresBow = $newRequiresBow;
	}

	public function  play(): void {
		if($this->requiresBow === true) {
			echo "Its probably a violin" .PHP_EOL;
		} else {
			echo "Perhaps its a guitar" .PHP_EOL;
		}
	}
}
