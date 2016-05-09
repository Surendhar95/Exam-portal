<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	
	 {{ HTML::style('/css/bootstrap.min.css')}}
	 {{ HTML::style('/css/style.css')}}
	 

</head>

<header>
<div class='header'>
	<div><div>
		<div id='tit'>
			<h1 style='color:white'><b>EXAM PORTAL</b></h1>

		</div>	
</div>

<div class='row' style="position:relative;top:100px">
	<div class='col-md-10'></div>
	<div class='col-md-1'>
</div>
<div class='col-md-1'>
<a href='#' style='text-decoration:none;position:absolute;bottom:10px;color:white;font-size:15px'>Logout</a>
</div></div>
</header>

<body>
	<div class='row' style='position:relative;top:180px'>

<div class='col-md-3' style='position:relative;left:21px'><h2>Student</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr size='30'>
</div>

<div class='row'>
		<div class='col-md-8 col-md-offset-2'>
	<div id='content1'>
		<h2>Exam</h2>
	<ul style='position:relative;left:-40px;list-style-type:none;'>
		<li class=''><a href='/'>View Exam</a></li>
</ul>
</div>
<div id='content2' style='position:relative;top:230px'>
		<h2>Results</h2>
	<ul style='position:relative;left:-40px;list-style-type:none;'>
	
	<li class=''><a href='#'>View Result</a></li>
</ul>
</div>

<div id='content2' style='position:relative;top:260px'>
		<h2>Time Table</h2>
	<ul style='position:relative;left:-40px;list-style-type:none;'>
	
	<li class=''><a href='#'>View Time Table</a></li>
</ul>
</div>

</div>