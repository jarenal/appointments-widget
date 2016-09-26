<?php

namespace Jarenal\Tests;

class DummyData {

	public static function getOriginalTest(){

		// Original data
		$data = array();

		$data["01-06-2016"][] = array("start_time"=>"11:00",
										"end_time"=>"13:00",
										"slot_description"=>"Group session",
										"appointment_ref"=>"11:00-13:00-group",
										"price"=>"160.50");

		$data["01-06-2016"][] = array("start_time"=>"13:00",
										"end_time"=>"14:00",
										"slot_description"=>"Individual session",
										"appointment_ref"=>"13:00-14:00-individual",
										"price"=>"135");

		$data["02-06-2016"][] = array("start_time"=>"11:00",
										"end_time"=>"11:30",
										"slot_description"=>"Quick session",
										"appointment_ref"=>"11:00-11:30-quick",
										"price"=>"100");

		$data["02-06-2016"][] = array("start_time"=>"11:30",
										"end_time"=>"12:30",
										"slot_description"=>"Individual session",
										"appointment_ref"=>"11:30-12:30-individual",
										"price"=>"135");

		return $data;
	}

	public static function getOverlapedTest(){

		// Overlaped slot
		$data = array();

		$data["01-06-2016"][] = array("start_time"=>"11:00",
										"end_time"=>"13:00",
										"slot_description"=>"Group session",
										"appointment_ref"=>"11:00-13:00-group",
										"price"=>"160.50");

		$data["01-06-2016"][] = array("start_time"=>"13:00",
										"end_time"=>"14:00",
										"slot_description"=>"Individual session",
										"appointment_ref"=>"13:00-14:00-individual",
										"price"=>"135");

		$data["01-06-2016"][] = array("start_time"=>"13:30",
										"end_time"=>"14:30",
										"slot_description"=>"Overlaped",
										"appointment_ref"=>"13:30-14:30-overlaped",
										"price"=>"200");

		$data["02-06-2016"][] = array("start_time"=>"11:00",
										"end_time"=>"11:30",
										"slot_description"=>"Quick session",
										"appointment_ref"=>"11:00-11:30-quick",
										"price"=>"100");

		$data["02-06-2016"][] = array("start_time"=>"11:30",
										"end_time"=>"12:30",
										"slot_description"=>"Individual session",
										"appointment_ref"=>"11:30-12:30-individual",
										"price"=>"135");

		return $data;
	}

	public static function getWrongValuesTest(){

		// With wrong values
		$data = array();

		$data["01-06-2016"][] = array("start_time"=>"11:00",
										"end_time"=>"13:00",
										"slot_description"=>"Group session",
										"appointment_ref"=>"11:00-13:00-group",
										"price"=>"160.50");

		$data["01-06-2016"][] = array("start_time"=>"13:00",
										"end_time"=>"14:00",
										"slot_description"=>"Individual session",
										"appointment_ref"=>"13:00-14:00-individual",
										"price"=>"135");

		$data["02-06-2016"][] = array("start_time"=>"11:00",
										"end_time"=>"11:30",
										"slot_description"=>"Quick session",
										"appointment_ref"=>"11:00-11:30-quick",
										"price"=>"100");

		$data["02-06-2016"][] = array("start_time"=>"11:30",
										"end_time"=>"12:30",
										"slot_description"=>"Individual session",
										"appointment_ref"=>"11:30-12:30-individual",
										"price"=>"135");

		return $data;
	}
}