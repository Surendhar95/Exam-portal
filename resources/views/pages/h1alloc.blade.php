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
	
 <div style='position:absolute;top:90px;right:70px'>
       <a href='/logout' style='color:white;text-decoration:none;font-size:15px'>Logout</a>
    </div>


</header>

<body>
	
<div class='row' style='position:relative;top:180px'>

<div class='col-md-3' style='position:relative;left:21px'><h2>Seat Allocation</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr size='30'>
</div>

<div class='row' style='position:relative;top:200px'>
		<div class='col-md-2'></div>
		<div class='col-md-4' >
	<ul class="nav nav-tabs" style='width:330px'>
  <li role="presentation" class="active"><a href="h1_alloc">Hall 1</a></li>
  <li role="presentation"><a href="h2_alloc">Hall 2</a></li>
  <li role="presentation"><a href="h3_alloc">Hall 3</a></li>
  <li role="presentation"><a href="h4_alloc">Hall 4</a></li>
</ul>
</div>
</div>
<div class="row" style='position:relative;top:250px'>
	<div class='col-md-2'></div>
		<div class='col-md-3'>
			<h3>Faculty:</h3>
			@foreach($fac1 as $val)
			<p>{{$val->fac_id}}</p>
			
			@endforeach
			<table style='text-align:center' border='2' width='400px'>
				<tr ><th width='40px' style='text-align:center'>Seat No:</th><th width='40px' style='text-align:center'>Roll No:</th></tr>
		@foreach($hall1 as $val)		
				@if($i == 0)		
				<tr><td >{{$val->rollno}}</td><td >{{$val->seat_no}}</td></tr>
				<?php $i=1?>
					@else
					<tr><td >{{$val->rollno}}</td><td >{{$val->seat_no}}</td></tr>
					<?php $i =0 ?>
					@endif
		@endforeach
			</table>	
		</div> 
		<div class='col-md-1'></div>
		<div class='col-md-5'>
			<center>
			<img src='img/HALL1.png' style='width:800px;height:auto;position:relative;left:-10px'/>
		</center>
		</div>
	</div>
	</div>

	<div style='position:relative;height:20px'></div>
</body>