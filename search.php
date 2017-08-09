<?php
if (isset($_POST["search"])){
$dir = "Temp/";
$files = scandir($dir);
if (in_array($_POST['filename'], $files))
  {
  echo 'Match found <br> <a href="'.$dir.''.$_POST['filename'].'">'.$_POST['filename'].'</a>';
  }
else
  {
  echo "Match not found";
  }
  
print_r($a);
}
?>
<form method="post" action="filesearch.php">
	<input type="text" placeholder="filename" name="filename">
	<input type="submit" name="search" value="search">
</form>
