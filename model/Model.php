<?php

include_once("model/Post.php");

class Model {

	// generate not repeat mass number
	public function randomix($min, $max, $count) {
		$numbers = range($min, $max);
		shuffle($numbers);
		return array_slice($numbers, 0, $count);
	}

	public function getpostList()
	{
		// here goes some hardcoded values to simulate the database
		$url = "https://picsum.photos/list";
		$result = file_get_contents($url);
		$array = json_decode($result,true);
		$listOfItems[] = array();
		$magicrandom = $this->randomix(0,sizeof($array),9);
		for($i=0;$i<9;$i++){
			$listOfItems[$i] = new post(
				$array[$magicrandom[$i]]["id"],
				$array[$magicrandom[$i]]["author"],
				$array[$magicrandom[$i]]["post_url"],
				$array[$magicrandom[$i]]["format"],
				$array[$magicrandom[$i]]["width"],
				$array[$magicrandom[$i]]["height"],
				$array[$magicrandom[$i]]["filename"],
				$array[$magicrandom[$i]]["author_url"]
			);
		}

		return $listOfItems;
	}
	
}

?>