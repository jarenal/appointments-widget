<?php

namespace Jarenal;

class Validator {

	public static function isDate($date){

		if(strtotime($date))
			return true;
		else
			return false;
	}

	public static function isTime($time){
		$time_chunk = explode(":", $time);

		if(count($time_chunk) !== 2)
			return false;

		if(!is_numeric($time_chunk[0]))
			return false;

		if(!is_numeric($time_chunk[1]))
			return false;

		if($time_chunk[0] > 24)
			return false;

		if($time_chunk[1] > 59)
			return false;

		return true;
	}

	public static function isReference($reference){

		$pattern = "/(\d{2}:\d{2}-){2}\w+/";
		if(preg_match($pattern, $reference)==1)
			return true;
		else
			return false;
	}

	public static function isPrice($price){

		if(!is_numeric($price))
			return false;

		if($price < 0)
			return false;

		return true;
	}
}