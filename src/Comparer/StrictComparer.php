<?php

namespace Diff\Comparer;

/**
 * Value comparer that uses PHPs native strict equality check (ie ===).
 *
 * @since 0.6
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class StrictComparer implements ValueComparer {

	/**
	 * @param mixed $firstValue
	 * @param mixed $secondValue
	 *
	 * @return bool
	 */
	public function valuesAreEqual( $firstValue, $secondValue ) {
		return $firstValue === $secondValue;
	}

}
