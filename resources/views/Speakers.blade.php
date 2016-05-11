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
                <h1 class="page-header">Speaker
                    <small>TEDxHsinchu</small>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach($speakers as $speaker)
              <div class="col-md-3 portfolio-item">
                  @if(!isset($userSpeakerVotes[$speaker -> id]))
                    <a href="speaker/{{ $speaker->id }}">         
                      <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
                      <center>
                        <h3>{{ $speaker->topic }} by {{ $speaker->name }}</h3>
                      </center>
                    </a>
                  @else
                    <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
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
          <div class="row">
              恭喜大大，你已經收集完所有正能量！
          </div>
        @endif


</div>
@endsection
