@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Students Login</div>
                <div class="panel-body">
                   
                    {{ Form::open(array('url' => '/student'))}}
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-2 col-md-offset-2 control-label">Roll No</label>

                            <div class="col-md-6">
                                {{ Form::text('rollno','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}

                                @if ($errors->has('rollno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rollno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <br>
                    
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Submit
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                                
                            </div>
                        </div>
                        <br>
                        <br>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
