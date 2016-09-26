<?php

namespace Jarenal;

class Model {

	private $source;

	public function __construct($source){
		$this->source = $source;
	}

	public function getData(){

		try
		{
			if(!file_exists($this->source))
				throw new \Exception("The source file '{$this->source}' doesn't exist.", 1);

			$data = array();

			$handle = fopen($this->source, "r");

			if($handle===false)
				throw new \Exception("Error trying to open source file '{$this->source}'.", 1);

		    while (($row = fgetcsv($handle, 0, "|")) !== false)
		    {

		    	// Validate date
				if(!isset($row[0]))
    				continue;

				list($day, $month, $year) = sscanf($row[0], "%2s%2s%4s");
				$date = $day."-".$month."-".$year;

    			if(!Validator::isDate($date))
    				continue;

		    	// Validate start_time
				if(!isset($row[1]))
    				continue;

    			if(!Validator::isTime($row[1]))
    				continue;

		    	// Validate end_time
				if(!isset($row[2]))
    				continue;

    			if(!Validator::isTime($row[2]))
    				continue;

		    	// Validate slot_description
				if(!isset($row[3]))
    				continue;

		    	// Validate appointment_ref
				if(!isset($row[4]))
    				continue;

    			if(!Validator::isReference($row[4]))
    				continue;

		    	// Validate price
	    		if(!isset($row[5]))
	    			continue;

    			if(!Validator::isPrice($row[5]))
    				continue;

    			// End validations

		    	if(!isset($data[$date]))
		    		$data[$date] = array();

		        $data[$date][] = array("start_time"=>$row[1],
								        	"end_time"=>$row[2],
								        	"slot_description"=>$row[3],
								        	"appointment_ref"=>$row[4],
								        	"price"=>$row[5],
	        	);
		    }

		    fclose($handle);

			return $data;

		} catch (\Exception $ex) {
			throw $ex;
		}
	}
}