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
                  <a href="speaker/{{ $speaker -> id }}">
                      <img class="img-responsive" src="{{ $speaker -> photo }}" alt="">
                  </a>
                  <center><h3><a href="#">{{ $speaker -> id }}-{{ $speaker -> name }}</a></h3></center>
              </div>
            @endforeach
        </div>



</div>
@endsection
