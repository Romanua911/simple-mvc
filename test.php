<?php
$url = "https://picsum.photos/list";
$result = file_get_contents($url);
$array = json_decode($result,true);
?>

<table>
  <tr>
    <th> № </th>
    <th>Format</th>
    <th>Width</th>
    <th>Height</th>
    <th>Filename</th>
    <th>Id</th>
    <th>Author</th>
    <th>Author url</th>
    <th>Post url</th>
  </tr>
  <?php 
    for ($i = 0; $i < sizeof($array); $i++) {
      echo("<tr>");
          echo("<td> ".$i."</td>");
          echo("<td> ".$array[$i]["format"]."</td>");
          echo("<td> ".$array[$i]["width"]."</td>");
          echo("<td> ".$array[$i]["height"]."</td>");
          echo("<td> ".$array[$i]["filename"]."</td>");
          echo("<td> ".$array[$i]["id"]."</td>");
          echo("<td> ".$array[$i]["author"]."</td>");
          echo("<td> ".$array[$i]["author_url"]."</td>");
          echo("<td> ".$array[$i]["post_url"]."</td>");
      echo("</tr>");
      }
      ?>
</table>
<?php $random = random_int ( 0 , sizeof($array) ) ?>
<img src=" <?php echo $array[$random]["post_url"]."/download?force=true" ?> " alt="some text" style="width:300px">