<?php
namespace CodingKatasPHP;
class Calculator{
	public static function add(){
		$args = func_get_args();
		return ( is_array( $args[0] ) ) ? array_sum( $args[0] ) : array_sum( $args );
	}

	public static function subtract(){
		$args = func_get_args();
		$numbers = ( is_array( $args[0] ) ) ? $args[0] : $args;
		$value =  array_shift( $numbers );

		foreach( $numbers as $i => $arg ){
			$value -= $arg;
		}
		return $value;
	}

	public static function multiply(){
		$args = func_get_args();
		return ( is_array( $args[0] ) ) ? array_product( $args[0] ) : array_product( $args );
	}

	public static function divide(){
		$args = func_get_args();
		$numbers = ( is_array( $args[0] ) ) ? $args[0] : $args;
		$value =  array_shift( $numbers );

		foreach( $numbers as $i => $arg ){
			$value = $value / $arg;
		}
		return $value;
	}
}
