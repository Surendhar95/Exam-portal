@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Login</div>
                <div class="panel-body">
                    {{ Form::open(array('url' => '/admin'))}}
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-2 col-md-offset-2 control-label">User Id</label>

                            <div class="col-md-6">
                                {{ Form::text('userid','',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px;position:relative;left:-2px'

                                ])}}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <br>
                    
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-2 col-md-offset-2 control-label">Password</label>

                            <div class="col-md-6">
                                {{ Form::password('password',[
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'style' => 'width:300px'

                                ])}}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     
                       <br>
                       <br>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
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
