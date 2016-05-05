@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feeling</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/speaker') }}">
                        {!! csrf_field() !!}
                        <center>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" name="feel" class="btn btn-primary" value="1">
                                    Feeling1
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12" >
                                <button type="submit" name="feel" class="btn btn-primary" value="2">
                                    Feeling2
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" name="feel" class="btn btn-primary" value="3">
                                    Feeling3
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" name="feel" class="btn btn-primary" value="4">
                                    Feeling4
                                </button>
                            </div>
                        </div>
                      </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
