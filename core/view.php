<?php
class View
{
	
	public $view;
	public $data;

	public function createPage($content,  $data)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		$this->view = $content;
		$this->data = $data;
		include __DIR__.'/../app/tpl/index.php';
	}
	public function layout($layout, $data = [])
	{
		include __DIR__.'/../app/tpl/layout/'.$layout.'.php';
	}
}