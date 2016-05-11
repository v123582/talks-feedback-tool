@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body" style="text-align:center;">
                    <p>每個人的願都需要很多正向心能量才能完成，</p>
                    <p>讓我們一起創造心能量</p>
                </div>
            </div>
            <center>
              <img src="./images/fblogin.jpg" width="30%">
              <p style="color:#AAAAAA;margin-top:10px;">-OR-</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-xs-12 control-label">E-Mail Address</label>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="慣用信箱">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <p style="color:#AAAAAA;margin-top:10px;">-OR-</p>
                <div class="form-group{{ $errors->has('serialNumber') ? ' has-error' : '' }}">
                    <label class="col-xs-12 control-label">SerialNumber</label>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="serialNumber" placeholder="登入序號">

                        @if ($errors->has('serialNumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('serialNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-sign-in"></i>START!
                        </button>

                    </div>
                </div>

            </form>
            </center>
        </div>
    </div>
</div>
@endsection
