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
 <div style='position:absolute;top:90px;right:70px'>
       <a href='/reg' style='color:white;text-decoration:none;font-size:15px'>Add Admin</a>
    </div>
    <div style='position:absolute;top:90px;right:190px'>
       <a href='/logout' style='color:white;text-decoration:none;font-size:15px'>Logout</a>
    </div>
</header>
<body>
<div class='row' style='position:relative;top:180px'>

<div class='col-md-3' style='position:relative;left:21px'><h2>Admin</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr>
</div>
<div class='row'>
		<div class='col-md-8 col-md-offset-2'>
	<div id='content1'>
		<h2>Exam</h2>
	<ul style='position:relative;left:-40px;list-style-type:none;top:20px'>
	
	<li class=''><a href='create_exam'>Create Exam</a></li>
	<li class=''><a href=''>View Exam</a></li>
	<li class=''><a href='#'>Update Exam</a></li>
</ul>
</div>
<div id='content2'>
		<h2>Results</h2>
	<ul style='position:relative;left:-40px;list-style-type:none;top:20px'>
	
	<li class=''><a href='#'>View Result</a></li>
</ul>
</div>

</div>
</div>
</body>

</html>
