<?php

class Post {
	public $id;
	public $author;
	public $post_url;
	public $format;
	public $width;
	public $height;
	public $filename;
	public $author_url;
	
	public function __construct($id,$author,$post_url,$format,$width,$height,$filename,$author_url)  
    {  		
		$this->id = $id;
		$this->author = $author;
		$this->post_url = $post_url;
		$this->format = $format;
		$this->width = $width;
		$this->height = $height;
		$this->filename = $filename;
		$this->author_url = $author_url;
    } 
}

?>