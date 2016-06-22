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
                    <img  width="100%" src="images/ted.png">
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
          <div class="row" style='margin:0 auto;text-align:center;margin-top:20px;'>
              <button class="btn btn-danger" onclick="location.href='result'">看我的結果</button>
              <p style="font-size:20px;padding:5px;">恭喜，您已經獲得所有實踐你願景的正向心能量！</p>
          </div>
        @endif


</div>
</br >
</br >
@endsection
