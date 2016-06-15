@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>講者 <span style="font-size:20px;font-weight:bolder;">{{ $speaker->name }}</span></br>
                      <span style="font-size:18px;">{{ $speaker-> topic }}</span>
                    </center>
                    <a href="{{ url('/speakers') }}">返回</a>
                </div>
                <div class="panel-body" >
                  <div id="speaker-background" style = "background-image: url('{{ $speaker -> tphoto}}');">
                      <div id="feeling-form">
                          <center>
                          <div class="row">
                              <div id="page1" class="col-xs-6" style="background-color:white;padding:5px;border-right:2px solid black;font-weight:bolder;">回饋</div>
                              <div id="page2" class="col-xs-6" style="background-color:white;padding:5px;color:#AAAAAA;">關於</div>
                          </div>
                          </center>

                          <div id="page2-content">
                             <div style="padding:10px;text-align:center;font-size:16px;">{{ $speaker -> description}}</div>
                          </div>

                          <div id="page1-content" >
                              <div style="margin:10px;">
                                <h4>此分享我得到了:</h4>
                              </div>
                              <form role="form" method="POST" action=" {{ url('/speaker', $speaker->id) }} ">
                                {!! csrf_field() !!}
                                          <div class="form-group">
                                             <div class="col-xs-3">
                                                 <input type="checkbox" value="1" name="feeling1[]"> 愛
                                             </div>
                                         </div>
                                         <div class="form-group">
                                            <div class="col-xs-3">
                                                <input type="checkbox" value="2" name="feeling1[]"> 願景
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <div class="col-xs-3">
                                               <input type="checkbox" value="3" name="feeling1[]"> 勇敢
                                           </div>
                                       </div>
                                       <div class="form-group">
                                          <div class="col-xs-3">
                                              <input type="checkbox" value="4" name="feeling1[]"> 自信
                                          </div>
                                      </div>
                                      <div class="form-group">
                                         <div class="col-xs-3">
                                             <input type="checkbox" value="5" name="feeling1[]"> 堅持
                                         </div>
                                     </div>
                                     <div class="form-group">
                                        <div class="col-xs-3">
                                            <input type="checkbox" value="6" name="feeling1[]"> 智慧
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-xs-3">
                                           <input type="checkbox" value="7" name="feeling1[]"> 創意
                                       </div>
                                   </div>
                                   <div class="form-group">
                                      <div class="col-xs-3">
                                          <input type="checkbox" value="8" name="feeling1[]"> 實踐
                                      </div>
                                  </div>

                                  <center>
                                    <div class="form-group">
                                      <div class="col-xs-12" style="margin-top:20px;">
                                        <button class="btn btn-danger" type="submit" >送出</button>
                                      </div>
                                    </div>
                                  </center>
                              </form>
                        </div>
                      </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
        jQuery(function($) {
          var $content1 = $('#page1-content').clone();
          var $content2 = $('#page2-content').clone();
          $('#page2-content').html('');
          $('#page1-content').html($content1);

          $('#page2').click(function(){
            console.log('===== change =====');
                $('#page2').css('color','black');
                $('#page2').css('font-weight','bolder');
                $('#page1').css('color','#AAAAAA');
                $('#page1').css('font-weight','normal');
                $('#page1').css('font-weight','normal');
                $('#page2-content').html($content2);
                $('#page1-content').html('');
          });

          $('#page1').click(function(){
            console.log('===== change =====');
                $('#page1').css('color','black');
                $('#page1').css('font-weight','bolder');
                $('#page2').css('color','#AAAAAA');
                $('#page2').css('font-weight','normal');
                $('#page2-content').html('');
                $('#page1-content').html($content1);
          });

        });
</script>

@endsection
