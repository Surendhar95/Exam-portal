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
	</br></br></br></br></br></br></br></br></br></br></br>

    <div style='position:absolute;top:90px;right:70px'>
       <a href='/logout' style='color:white;text-decoration:none;font-size:15px'>Logout</a>
    </div>
   
    
<div>
	 {{ Form::open(array('url' => '/exam_1'))}}
                        {!! csrf_field() !!}

                       
                            <label class="col-md-2 col-md-offset-2 control-label">Exam Id</label>

                            <div class="col-md-6">
                                {{ Form::text('exid','',[
                                    'class' => 'form-control',
                                    
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}

                                @if ($errors->has('exid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                   
                    </br></br>
                      
                            <label class="col-md-2 col-md-offset-2 control-label">Description</label>

                            <div class="col-md-6">
                                {{ Form::text('desc','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px'

                                ])}}
                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
</br></br>
                            <label class="col-md-2 col-md-offset-2 control-label">Duration</label>

                            <div class="col-md-6">
                                {{ Form::text('dur','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px'

                                ])}}
                                @if ($errors->has('dur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dur') }}</strong>
                                    </span>
                                @endif
          
                            </div>
          
          </br></br>                   <label class="col-md-2 col-md-offset-2 control-label">Semester</label>

                            <div class="col-md-6">
                                {{ Form::select('sem', array('odd' => 'Odd', 'even' => 'Even'),null,[
    'class' => "form-control dropdown button",
    'style' => "width:300px",

])}}
                                @if ($errors->has('dur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dur') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div style='position:relative;left:-670px;top:80px'>
                            {!! Form::submit('submit',[
	'class' => "btn btn-primary",

])!!}
</div>
 	
{!! Form::close() !!}
                       

</div>

</body>

</html>