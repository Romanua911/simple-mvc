<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['post']))
		{
			//show a list of all available posts
			$posts = $this->model->getpostList();
			include 'view/postlist.php';
		}
	}
}

?>