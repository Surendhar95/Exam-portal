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
	
 <div style='position:absolute;top:90px;right:70px'>
       <a href='/logout' style='color:white;text-decoration:none;font-size:15px'>Logout</a>
    </div>

<div>


	 {{ Form::open(array('url' => '/exam_2'))}}
                        {!! csrf_field() !!}    

<div class='row' style='position:relative;top:200px;'>
        <div class='col-md-1'></div>
        <div class='col-md-2'>
        {{ Form::label('date','Date') }}
        </div>
        <div class='col-md-2'>
        {{ Form::label('exam','Exams') }}
        </div>
    </div>
    <div class='row' style='position:relative;top:200px'>
        <div class='col-md-1'></div>
        <div class='col-md-2'>
        {{ Form::text('date1','',[
                                   'class' => 'form-control',
                                     'id' => "textField1",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ])}}
        </div>
        <div class='col-md-2'>
      {{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}
        </div>
    </div>
    <br>
    <div class='row' style='position:relative;top:200px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}
        </div>

    </div>
    <div class='row' style='position:relative;top:215px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        
    </div>
    <div class='row' style='position:relative;top:230px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day1[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        
    </div>

<div class='row' style='position:relative;top:300px'>
        <div class='col-md-1'></div>
        <div class='col-md-2'>
        {{ Form::text('date2','',[
                                   
                                    'class' => 'form-control',
                                      'id' => "textField2",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ]) }}
        </div>
        <div class='col-md-2'>
        {{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
    </div>
    <br>
    <div class='row' style='position:relative;top:305px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>

    </div>
    <div class='row' style='position:relative;top:320px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        
    </div>
    <div class='row' style='position:relative;top:335px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day2[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        
   </div>


     <div class='row' style='position:relative;top:405px'>
        <div class='col-md-1'></div>
        <div class='col-md-2'>
        {{ Form::text('date3','',[
                                   'class' => 'form-control',
                                   'id' => "textField3",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ])}}
        </div>
        <div class='col-md-2'>
        {{ Form::text('day3[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
    </div>
    <br>
    <div class='row' style='position:relative;top:405px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day3[]','',[
                           
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}
        </div>

    </div>
    <div class='row' style='position:relative;top:420px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day3[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        
    </div>

    <div class='row' style='position:relative;top:435px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day3[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        </div>
         <div class='row' style='position:relative;top:505px'>
        <div class='col-md-1'></div>
        <div class='col-md-2'>
        {{ Form::text('date4','',[
                                   'class' => 'form-control',
                                     'id' => "textField4",
                                    'required' => 'true',
                                    'style' => 'width:130px;position:relative;left:-2px'

                                ])}}
        </div>
        <div class='col-md-2'>
        {{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
    </div>
    <br>
    <div class='row' style='position:relative;top:520px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}
        </div>

    </div>
    <div class='row' style='position:relative;top:535px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
        
    </div>
    <div class='row' style='position:relative;top:550px'>
        <div class='col-md-3'></div>
        <div class='col-md-2'>
        {{ Form::text('day4[]','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ]) }}
        </div>
    </div> 
    <br>
     <div class='row' style='position:relative;top:550px'>
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