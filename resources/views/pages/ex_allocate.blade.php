<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	{{HTML::style('css/bootstrap.min.css')}}
     
     
    {{HTML::style('css/jsDatePick_ltr.min.css')}}
    {{HTML::script('js/jsDatePick.min.1.3.js')}}
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
<style>
th{
	text-align:center;
}
td{
	text-align:center;
}
</style>

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
	<br><br><br><br><br><br><br><br>
	<div style='position:relative;left:30px'>
		<h3><b>Meta Details</b></h3>
		<br>
		@foreach($ex_det as $data)
		<p><b>Exam ID</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp{{$data->ex_id}}</p>
		<p><b>Description</b>&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp{{$data->desc}}</p>
		<p><b>Duration</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp{{$data->duration}}</p>
		@endforeach
	</div>
	<br>
	<div style='position:relative;left:30px'>
	<h3><b>Time Table</b></h3>
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
	<div style='position:absolute;right:650px;top:-120px'>
	<a style='font-size:18px;color:red' href='/allocate'>Allocate Hall -->></a>
</div>
<br>
<br><br>
</body>





