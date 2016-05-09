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
	<div style='position:absolute;top:90px;right:70px'>
       <a href='/logout' style='color:white;text-decoration:none;font-size:15px'>Logout</a>
    </div>

<div class='row' style='position:relative;top:180px'>

<div class='col-md-3' style='position:relative;left:21px'><h2>Exam Details</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr size='30'>
</div>
<div class='row' style='position:relative;top:200px'>
	
		<div style='position:relative;left:30px'>
		<h3><b>Meta Details</b></h3>
		<br>
		@foreach($ex_det as $data)
		<p><b>Exam ID</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp{{$data->ex_id}}</p>
		<p><b>Description</b>&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp{{$data->desc}}</p>
		<p><b>Duration</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp{{$data->duration}}</p>
		@endforeach
	</div>
</div>

<div class='row' style='position:relative;top:300px;left:40px'>
	<ul style='position:relative;left:-40px;list-style-type:none;'>
		<li><a href='/view_tt'>View Time Table</a></li>
	<li><a href='h1_alloc'>View Hall Allotment</a></li>
	
</div>