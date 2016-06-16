@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body" style="text-align:center;font-size:20px;font-weight:bolder;">
                    <p>每個人的願景都需要很多正向心能量才能完成，</p>
                    <p>讓我們從聽&nbsp;Ted&nbsp;talks&nbsp;的收穫中一起創造正向心能量!</p>
                </div>
            </div>
            <center>
                @if (session()->has('message'))
                    <div class="alert alert-danger">
                        {!! session()->get('message') !!}
                    </div>
                @endif


              <a href="#" id="fbLogin">Login with Facebook</a>

            <p style="color:#AAAAAA;margin-top:10px;">-OR-</p>
            <form class="form-horizontal" name="myform" role="form" method="POST" action="{{ url('/login') }}">
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

                <input type="hidden" name="isFbLogin" id="isFbLogin">
                <input type="hidden" name="FbEmail" id="FbEmail">
                <input type="hidden" name="FbName" id="FbName">
                <input type="hidden" name="FbserialNumber" id="FbserialNumber">

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-sign-in"></i> 進入心願體驗歷程
                        </button>

                    </div>
                </div>

              本活動由&nbsp;<img width="20%" src="../images/title.png">&nbsp;贊助

            </form>
            </center>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script>

//  window.fbAsyncInit = function() {
//    FB.init({
//      appId      : '1721050088149127',
//      xfbml      : true,
//      version    : 'v2.6'
//    });
//  };

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));


  $('#fbLogin').click(function(){

      FB.init({
        appId      : '1721050088149127',
        xfbml      : true,
        version    : 'v2.6'
      });
      testAPI();

  });


      // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
          // console.log('statusChangeCallback');
          // console.log(response);
          // The response object is returned with a status field that lets the
          // app know the current login status of the person.
          // Full docs on the response object can be found in the documentation
          // for FB.getLoginStatus().
          if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
          } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
              'into this app.';
          } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
              'into Facebook.';
          }
        }

        // This function is called when someone finishes with the Login
        // Button.  See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {

          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
          });
        }

        // Here we run a very simple test of the Graph API after login is
        // successful.  See statusChangeCallback() for when this call is made.
        function testAPI() {

            FB.login(function(response) {
              if (response.authResponse) {
               console.log('Welcome!  Fetching your information.... ');
               FB.api('/me', {fields: 'name,email'},  function(response) {
                  $('#isFbLogin').val('true');
                  $('#FbEmail').val(response.email);
                  $('#FbName').val(response.name);
                  $('#FbserialNumber').val(response.id);
                  console.log(response);
                  document.myform.submit();
               });
              } else {
               alert('Facebook 登入失敗！');
              }
            }, {
                  scope: 'email',
                  return_scopes: true
              });



        }
</script>

@endsection
