<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Image Gallery</h2>
  <div class="row">
	<?php 
		for($i = 0 ; $i<sizeof($posts); $i++)
		{
			echo('<div class="col-md-4">
			<div class="thumbnail">
				<a href="'.$posts[$i]->post_url.'/download?force=true" target="_blank">
				<img src="'.$posts[$i]->post_url.'/download?force=true" alt="Lights" style="width:100%">
				<div class="caption">
					<a href='.$posts[$i]->author_url.'>'.$posts[$i]->author.'</a>
					<p> Width:'.$posts[$i]->width.' Height:'.$posts[$i]->height.'</p>
				</div>
				</a>
			</div>
			</div>');
			if($i % 3>1){
				echo('</div><div class="row">');
			}
		}
	?>
  </div>
</div>
</body>
</html>
