<?php

namespace Jarenal;

class View {

	private $mustache;

	public function __construct(){
		$this->mustache = new \Mustache_Engine;
	}

	public function getOutput($data = array()){

		$template = file_get_contents(dirname(__FILE__)."/Templates/index.tpl");

		return $this->mustache->render($template, $data);
	}
}