@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <p>每個人的願都需要很多正向心能量才能完成，</p>
                    <p>讓我們一起創造心能量</p>
                </div>
            </div>

            <center><button class='btn btn-default'><a href="{{ url('/login') }}">Login</a></button></center>
        </div>
    </div>
</div>
@endsection
