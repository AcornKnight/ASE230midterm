<form action="process.php">
	Email<br />
	<input name="email" type="email" required /><br /><br />
	First name<br />
	<input name="firstname" type="text" /><br /><br />
	Last name<br />
	<input name="lastname" type="text" /><br /><br />
	Subject<br />
	<input type="text" name="subject" /><br /><br />
	
	Message<br />
	<textarea name="message" ></textarea><br /><br />
	
	<input type="submit" value="Submit form" />
	<input type="reset" value="Reset form content" />
</form>

<hr />
<form method="POST" action="register.php?index=5">
	<input type="hidden" name="user_id" value="5" />
	Email<br />
	<input name="email" type="email" required /><br /><br />
	First name<br />
	<input name="firstname" type="text" /><br /><br />
	Last name<br />
	<input name="lastname" type="text" /><br /><br />
	Password<br />
	<input type="password" name="password" /><br /><br />
	
	<input type="submit" value="Submit form" />
	<input type="reset" value="Reset form content" />
</form>
<hr />
<form method="POST" action="blog_process.php" enctype="multipart/form-data">
	
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
	Keyword<br />
	<input type="text" name="keywords[]" /><br /><br />
	Keyword<br />
	<input type="text" name="keywords[]" /><br /><br />
	Keyword<br />
	<input type="text" name="keywords[]" /><br /><br />
	
	Picture<br />
	<input type="file" name="picture[]" /><br /><br />
	Picture<br />
	<input type="file" name="picture[]" /><br /><br />
	Picture<br />
	<input type="file" name="picture[]" /><br /><br />
	Picture<br />
	<input type="file" name="picture[]" /><br /><br />
	Picture<br />
	<input type="file" name="picture[]" /><br /><br />
	Picture<br />
	<input type="file" name="picture[]" /><br /><br />
	<input type="submit" value="Submit form" />
	<input type="reset" value="Reset form content" />
</form>