<?php
/**
 * Created by PhpStorm.
 * User: judeamiller
 * Date: 7/31/18
 * Time: 8:17 AM
 */

namespace Judeamiller\SnapTrait;


class Instrument {
	protected  $instrumentCategory;
	public function __construct(string $newInstrumentCategory) {
		$this->setInstrumentCategory($newInstrumentCategory);
	}

	/**
	 * @return mixed
	 */
	public function getInstrumentCategory(): string {
		return $this->instrumentCategory;
	}

	/**
	 * @param mixed $instrumentCategory
	 */
	public function setInstrumentCategory(string $instrumentCategory): void {
		$this->instrumentCategory = $instrumentCategory;
	}


}


