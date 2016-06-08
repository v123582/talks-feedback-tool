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
            <div class="col-xs-12">
                <h1 class="page-header">
                    <center><img src="images/ted.png">Hsinchu
                      <p><small>創新創業   |   創愛創願</small></p>
                      <!-- <p>上午   |   下午</p> -->
                    </center>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <center>
          <section>
            <div class="row">
                <h1 class="page-header">上午</h1>
                @foreach($speakers as $speaker)
                @if($speaker->event == 0)
                  <div class="col-xs-6 portfolio-item">
                      @if(!isset($userSpeakerVotes[$speaker -> id]))
                        <a href="speaker/{{ $speaker->id }}">
                          <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
                        </a>
                      @else
                        <img class="img-responsive" src="{{ $speaker -> vphoto }}" alt="">
                      @endif
                  </div>
                @endif
                @endforeach
            </div>
          </section>

          <section>
            <div class="row">
                <h1 class="page-header">下午</h1>
                @foreach($speakers as $speaker)
                @if($speaker->event == 1)
                  <div class="col-xs-6 portfolio-item">
                      @if(!isset($userSpeakerVotes[$speaker -> id]))
                        <a href="speaker/{{ $speaker->id }}">
                          <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
                        </a>
                      @else
                        <img class="img-responsive" src="{{ $speaker -> vphoto }}" alt="">
                      @endif
                  </div>
                @endif
                @endforeach
            </div>
          </section>
        <!-- <div class="row">
            @foreach($speakers as $speaker)
              <div class="col-xs-6 portfolio-item">
                  @if(!isset($userSpeakerVotes[$speaker -> id]))
                    <a href="speaker/{{ $speaker->id }}">
                      <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
                    </a>
                  @else
                    <img class="img-responsive" src="{{ $speaker -> vphoto }}" alt="">
                  @endif
              </div>
            @endforeach
        </div> -->
      </center>
        @if($voteDone)
          <!-- Projects Row -->
          <div class="row" style='margin:0 auto;text-align:center;'>
              <button class="btn btn-danger" onclick="location.href='result'">看我的結果</button>
              <p>恭喜大大，你已經收集完所有正能量！</p>
          </div>
        @endif


</div>
@endsection
