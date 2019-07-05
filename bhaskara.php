<?php
	function calcula_bhaskara($valor_a, $valor_b, $valor_c) {
		$delta = ($valor_b * $valor_b) - ((4 * $valor_a) * $valor_c);
		$x1 = (-$valor_b + sqrt ($delta)) / (2 * $valor_a);
		$x2 = (-$valor_b - sqrt ($delta)) / (2 * $valor_a);
		return array('x1' => $x1, 'x2' => $x2);;
	}
?>
