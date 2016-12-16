<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>surveyForm</title>
</head>
<style type="text/css">
	/*#container{
		display: inline-block;
		text-align: center;
		border: 2px solid black;
		font-family: sans-serif;
	}*/
</style>
<body>
	<div id="container">
		<form action="/Surveys/Process_form" method="post">
			<p><label>Your Name:</label>
			<input type="text" name="name"></p>
			<p><label>Dojo Location:</label>
			<select name="city">
				<option value="mountain_view">Mountain View</option>
				<option value="sunnyvale">Sunnyvale</option>
				<option value="gotham">Gotham City</option>
				<option value="hogsmeade">Hogsmeade</option>
				<option value="capitol">The Capitol</option>
			</select></p>
			<p><label>Favorite Language:</label>
			<select name="pLang">
				<option value="php">PHP</option>
				<option value="javascript">Javascript</option>
				<option value="ruby">Ruby</option>
				<option value="python">Python</option>
			</select></p>
			<p><label>Comment</label></p>
			<textarea name="comment" rows="5" cols="40"></textarea>
			<p><input type="submit" value="Submit"></p>
		</form>
	</div>
</body>
</html>