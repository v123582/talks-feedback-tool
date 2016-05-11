@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>講者 {{ $speaker->name }}</center>
                    <a href="{{ url('/speakers') }}">返回</a>
                    <button id="btn" class="btn btn-default" style="float:right;">簡介</button>
                </div>
                <div class="panel-body" >
                   <img id="image" width="100%" src='../images/test.jpg'>
                    <form role="form" method="POST" action=" {{ url('/speaker', $speaker->id) }} ">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="col-xs-4">
                                <button type="submit" name="feel" class="btn btn-primary" value="1">
                                    Feeling1
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4" >
                                <button type="submit" name="feel" class="btn btn-primary" value="2">
                                    Feeling2
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <button type="submit" name="feel" class="btn btn-primary" value="3">
                                    Feeling3
                                </button>
                            </div>
                        </div>
                        <hr />
                        <hr style='height:2px;'>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <button type="submit" name="feel" class="btn btn-primary" value="4">
                                    Feeling4
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <button type="submit" name="feel" class="btn btn-primary" value="5">
                                    Feeling5
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <button type="submit" name="feel" class="btn btn-primary" value="6">
                                    Feeling6
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
        jQuery(function($) {
          $('#btn').click(function(){
            console.log('===== change image =====');
            $('#image').toggle(
                        function(){
                            $(this).html();
                        },
                        function(){
                            $(this).css({"opacity":"1"});
                        }
            );
          });

        });
</script>

@endsection
