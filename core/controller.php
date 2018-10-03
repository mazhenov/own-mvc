<?php

class Controller {

	public $data;

	public function view($a, $data = []){
		$view = new View;
		$view->createPage($a, $data);
	}
	public function addModel($modelName){
		$modelFile = __DIR__ . '/../app/models/' . $modelName . '.php';
		if (file_exists($modelFile)) {
            include_once ($modelFile);
        }
        $this->data = new $modelName;
        return $modelName;
	}

}