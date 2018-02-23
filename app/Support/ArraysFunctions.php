<?php namespace App\Support;

use ArrayAccess;

	/**
	* Use to define the functions to use with the arrays 
	*/
	class ArraysFunctions
	{
		public static function checkisArry($value){
			return is_array($value) || $value instanceof ArrayAccess;
		}

		public static function ifkeyExist($array, $key){
			if($array instanceof ArrayAccess) {
				return $array->offesetExists($key);
			}
			return array_key_exists($key, $array);
		}

		public static function get($array, $key, $default = null)
		{
			if(!self::checkisArry($array)) {
				return $default;
			}

			if(is_null($key)) {
				return $array;
			}

			if(self::ifkeyExist($array, $key)) {
				return $array[$key];
			}

			foreach (explode('.', $key) as $segment) {
				if (self::checkisArry($array) && self::ifkeyExist($array, $segment)) {
					$array = $array[$segment];
				} else {
					return $default;
				}
				
			}
			return $array;
		}

		public static function first($array, $callback = null, $default = null){
			
			if (is_null($callback)) {
				if(empty($array)) {
					return $default;
				}

				foreach ($array as $item) {
					return $item;			
				}
			}

			foreach ($array as $key => $value) {
				if(call_user_func($callback, $value, $key)) {
					return $value;
				}
			}
			return $default;
		}

		public static function last($array, $callback = null, $default = null){
			
			if (is_null($callback)) {
				if(empty($array)) {
					return $default;
				}

				return end($array);
			}

			return self::first(array_reverse($array, true), $callback, $default);
		}

		public static function where($array, $callback = null, $default = null){
			
			return array_filter($array, $callback, ARRAY_FILTER_USE_BOTH);
		}

		public static function only($array, $key){
			return array_intersect_key($array, (array_flip((array) $key)));
		}

		public static function have($array, $key){
			if (is_null($key)) {
				return false;
			}
			$keys = (array) $key;

			if($keys === []) {
				return false;
			}

			foreach ($keys as $key) {
				$arrayCopy = $array;

				if (self::ifkeyExist($array, $key)) {
					continue;
				}

				foreach (explode('.', $key) as $segment) {
					if (self::checkisArry($arrayCopy) && self::ifkeyExist($arrayCopy, $segment)) {
						$arrayCopy = $arrayCopy[$segment];
					} else {
						return false;
					}
				
				}
				
			}
			return true;
		}
	}