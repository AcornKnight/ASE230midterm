<?php
	if(count($_POST)>0){
		//read json file
		$json_db=file_get_contents('db.json');
		//convert into PHP array
		$json_db=json_decode($json_db,true);
		//append the element
		$json_db[]=$_POST;
		//encode PHP 
		$json_db=json_encode($json_db,JSON_PRETTY_PRINT);
		//save file
		file_put_contents('db.json',$json_db);
		die();
		
	}

?>


<form method="POST" action="post_create.php" enctype="multipart/form-data">
	
	Title<br />
	<input name="title" type="text" required /><br /><br />
	
	Content<br />
	<textarea name="content" ></textarea><br /><br />
	
	Keyword<br />
	<input type="text" name="keywords[]" /><br /><br />
	Keyword<br />
	<input type="text" name="keywords[]" /><br /><br />
	Keyword<br />
	<input type="text" name="keywords[]" /><br /><br />
	<input type="submit" value="Submit form" />
	<input type="reset" value="Reset form content" />
</form>