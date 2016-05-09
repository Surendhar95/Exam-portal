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

</header>

<body>
<div class='row' style='position:relative;top:180px'>

<div class='col-md-3' style='position:relative;left:21px'><h2>Time Table</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr size='30'>
</div>
	<div style='position:relative;top:130px;left:30px'>
	
	<table style='position:relative;top:70px;left:20px' border='1'>
<tr><th style='width:200px'>Date</th><th style='width:200px'>Exam</th></tr>

	@foreach($tt as $data)
		@if($id % 3 == 0)
		<tr><td  rowspan='4'> {{$data->date}}</td><td style='height:20px'> {{$data->code}}</td></tr>
		@endif
		<tr><td>{{ $data->code}}</td></tr>
		<?php $id++; ?>
		@endforeach
	</table>
	<br>
<div class='row' style='position:relative;top:300px;left:40px'>
	<ul style='position:relative;left:-40px;list-style-type:none;'>
		<li><a href='/view_tt'>View Time Table</a></li>
	<li><a href='h1_alloc'>View Hall Allotment</a></li>
	<li><a href='/fac_alloc'>View Faculty Allotment</a></li>
</div>
	</body>
