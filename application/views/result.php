<?php
//this one is in views
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result page</title>
</head>
<style type="text/css">
	.successAlert{
		background-color: lightgreen;
		border: 1px solid black;
		display: block;
		width: 500px;
		height: auto;
		margin: 0px auto 10px;
		padding: 5px;
	}
	#submittedInfo{
		display: block;
		border: 1px solid black;
		width: 500px;
		height: auto;
		margin: 0px auto;
		padding: 5px;
	}
	h3{
		text-decoration: underline;
	}
	p{
		margin-left: 20px;
	}
</style>
<body>
	<div class="successAlert">
	Thanks for submitting this form! You have submitted this form <?= $this->session->userdata('counter') ?> times now.
	</div>
	<div id="submittedInfo">
		<h3>Submitted Information</h3>
		<p>Name: <?= $survey_input['name']; ?></p>
		<p>Dojo Location: <?= $survey_input['city']; ?></p>
		<p>Favorite Language: <?= $survey_input['pLang']; ?></p>
		<p>Comment: <?= $survey_input['comment']; ?></p>
		<a href= "/Surveys"> Go Back</a>
		<!-- <input type="button" value="Go Back" onClick="history.go(-1);return: true";> -->
	</div>
</body>
</html>