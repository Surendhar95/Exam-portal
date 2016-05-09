<!-- HOME -->

<!DOCTYPE html>
<html>
<head>
	<title>Exam Portal | Home</title>
	{{HTML::style('/css/bootstrap.min.css')}}
	
	<link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
</head>

<body>


<div class='jumbotron header'>

</div>
<center>
<div id='selection'>
<div class='form'>
{!! Form::open(array('url' => "/log")) !!}

{!! Form::label('mode','Login as:',[
	'class' => 'inline',
]) !!}

{!! Form::select('mode', array('admin' => 'Admin', 'student' => 'Student','faculty' => 'Faculty'),null,[
	'class' => "form-control dropdown button",
	'style' => "width:200px",

]) !!}
</br>
{!! Form::submit('submit',[
	'class' => "btn btn-primary",

])!!}
 	
{!! Form::close() !!}
</div>
</div>
</center>
</body>


</html>