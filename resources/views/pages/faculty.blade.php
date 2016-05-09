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

<div class='col-md-3' style='position:relative;left:21px'><h2>Faculty Allotment</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
	<hr size='30'>
</div>


	<div class="row" style='position:relative;top:250px'>

	<div class='col-md-2'></div>
		<div class='col-md-3'>
			<table style='text-align:center' border='2' width='400px' height='500px'>
				<tr ><th width='40px'style='text-align:center'>Hall</th><th width='40px'style='text-align:center'>Faculty</th></tr>
				<tr><td rowspan='2'>Hall 1</td><td >R01</td></tr>
				<tr><td >R02</td></tr>
				<tr><td rowspan='2'>Hall 2</td><td>R03</td></tr>
				<tr><td>R04</td></tr>
				<tr><td rowspan='2'>Hall 3</td><td>R05</td></tr>
				<tr><td>R06</td></tr>
				<tr><td rowspan='2'>Hall 4</td><td>R07</td></tr>
				<tr><td>R08</td></tr>
				
			</table>	
		</div> 
	</div>
</body>