<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	{{HTML::style('css/bootstrap.min.css')}}
     
     
    {{HTML::style('css/jsDatePick_ltr.min.css')}}
    {{HTML::script('js/jsDatePick.min.1.3.js')}}
    {{ HTML::style('/css/style.css')}}
</head>

<script type="text/javascript">
    window.onload = function(){
        new JsDatePick({
            useMode:2,
            target:"textField1",
            dateFormat:"%Y-%M-%d"
          
        });
        new JsDatePick({
            useMode:2,
            target:"textField2",
            dateFormat:"%Y-%M-%d"
          
        });
        new JsDatePick({
            useMode:2,
            target:"textField3",
             dateFormat:"%Y-%M-%d"
          
        });
        new JsDatePick({
            useMode:2,
            target:"textField4",
             dateFormat:"%Y-%M-%d"
          
        });
    };
</script>
<header>
<div class='header'>
    <div><div>
        <div id='tit'>
            <h1 style='color:white'><b>EXAM PORTAL</b></h1>

        </div>  
</div>


</header>
<body class='full'>
    <div class='row' style='position:relative;top:180px'>

<div class='col-md-3' style='position:relative;left:21px'><h2>Create Exam</h2></div>
</div>

<div class='row' style='position:relative;top:160px'>
    <hr size='30'>
</div>
	
<div>
	 {{ Form::open(array('url' => '/exam_2'))}}
                        {!! csrf_field() !!}    

<table style='position:relative;top:200px;left:50px;border-spacing:50px' border='0'>
	<tr><th style='width:200px'><font size='5'> {{ Form::label('date','Date') }}</th>
		<th style='width:200px'><font size='5'> {{ Form::label('exam','Exams') }}</th></tr>
	<tr><td rowspan='4'>{{ Form::text('date1','',[
                                   'class' => 'form-control',
                                     'id' => "textField1",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ])}}</td>
         <td style='height:20px'> {{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}</td></tr>
       
    
       
    <tr><td>{{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}</td></tr>

    <tr><td>{{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>


    <tr><td>{{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    <tr style='top:10px'><td rowspan='4'>{{ Form::text('date2','',[
                                   
                                    'class' => 'form-control',
                                      'id' => "textField2",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ]) }}</td>

        <td style='height:20px'> {{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>


        <tr><td>{{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    <tr><td>{{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    <tr><td>{{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    <tr><td rowspan='4'>{{ Form::text('date3','',[
                                   'class' => 'form-control',
                                   'id' => "textField3",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ])}}</td>
         <td style='height:20px'> {{ Form::text('day3[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>


     
  <tr><td>{{ Form::text('day3[]','',[
                           
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}</td></tr>

   <tr><td> {{ Form::text('day3[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    <tr><td>{{ Form::text('day3[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>


 <tr><td rowspan='4'>{{ Form::text('date4','',[
                                   'class' => 'form-control',
                                     'id' => "textField4",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ])}}</td>
 	<td style='height:20px'>{{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>
         
       <tr><td>{{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}</td></tr>

    <tr><td>{{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    <tr><td> {{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}</td></tr>

    </table>
     <div class='row' style='position:relative;top:220px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {!! Form::submit('submit',[
    'class' => "btn ",

])!!} <br><br>
      <br><br>
        </div>
    </div> 
     <br><br>
      <br><br>
 
    
{!! Form::close() !!}
        
                       

</div> <br><br>

</body>

</html>