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
			<table style='text-align:center' border='2' width='400px' height='500px'>
				<tr ><th width='40px' style='text-align:center'>Seat No:</th><th width='40px' style='text-align:center'>Roll No:</th><th width='40px' style='text-align:center'>Seat No:</th><th  width='40px' style='text-align:center'>Roll No:</th></tr>
		@foreach($)				
				<tr><td >L01</td><td >L01</td><td >L01</td><td >R01</td></tr>
				<tr><td >L02</td><td >L01</td><td >L01</td><td >R02</td></tr>
				<tr><td>L03</td><td >L01</td><td >L01</td><td>R03</td></tr>
				<tr><td>L04</td><td >L01</td><td >L01</td><td>R04</td></tr>
				<tr><td>L05</td><td >L01</td><td >L01</td><td>R05</td></tr>
				<tr><td>L06</td><td >L01</td><td >L01</td><td>R06</td></tr>
				<tr><td>L07</td><td >L01</td><td >L01</td><td>R07</td></tr>
				<tr><td>L08</td><td >L01</td><td >L01</td><td>R08</td></tr>
				<tr><td>L09</td><td >L01</td><td >L01</td><td>R09</td></tr>
				<tr><td>L10</td><td >L01</td><td >L01</td><td>R10</td></tr>
			</table>	
		</div> 
	</div>
</body>