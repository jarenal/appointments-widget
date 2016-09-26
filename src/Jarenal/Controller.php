<?php

namespace Jarenal;

class Controller {

	private $view;
	private $model;

	public function __construct(){
		$this->view = new View();
		$this->model = new Model(dirname(__FILE__)."/../../examples/appointments.txt");
	}

	public function execute(){
		return $this->view->getOutput(array("data"=> json_encode($this->model->getData())));
	}
}