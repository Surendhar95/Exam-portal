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

<div class='col-md-3' style='position:relative;left:21px'><h2>Seat Allocation</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr size='30'>
</div>
<div class="row" style='position:relative;top:250px'>
	<div class='col-md-2'></div>
		<div class='col-md-3'>
			<h3>Faculty:</h3>
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
	</div>
</body>