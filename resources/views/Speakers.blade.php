@extends('layouts.app')

@section('content')

<div class="container">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {!! session()->get('message') !!}
            </div>
        @endif

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <center><img src="images/ted.png">Hsinchu
                    <p><small>創新創業   |   創愛創願</small></p></center>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach($speakers as $speaker)
              <div class="col-xs-6 portfolio-item">
                  @if(!isset($userSpeakerVotes[$speaker -> id]))
                    <a href="speaker/{{ $speaker->id }}">
                      <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
                      <center>
                        <h3>{{ $speaker->topic }} by {{ $speaker->name }}</h3>
                      </center>
                    </a>
                  @else
                    <img class="img-responsive" src="{{ $speaker -> vphoto }}" alt="">
                    <center>
                      <h3>{{ $speaker->topic }} by {{ $speaker->name }}</h3>
                      <h3>vote: {{ $userSpeakerVotes[$speaker -> id] or '' }}</h3>
                    </center>
                  @endif
              </div>
            @endforeach
        </div>

        @if($voteDone)
          <!-- Projects Row -->
          <div class="row" style='margin:0 auto;text-align:center;'>
              <button class="btn btn-danger" onclick="location.href='result'">看我的結果</button>
              <p>恭喜大大，你已經收集完所有正能量！</p>
          </div>
        @endif


</div>
@endsection
