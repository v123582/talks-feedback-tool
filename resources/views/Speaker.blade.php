@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>講者 <span style="font-size:20px;font-weight:100%;">{{ $speaker->name }}</span></br>
                      <span style="font-size:18px;">{{ $speaker-> topic }}</span>
                    </center>
                    <a href="{{ url('/speakers') }}">返回</a>
                </div>
                <div class="panel-body" style="height:800px; ">
                  <div id="speaker-background" style = "background-image: url('{{ $speaker -> tphoto}}');">
                      <div id="feeling-form">
                          <center>
                          <div class="row">
                              <div id="page1" class="col-xs-6" style="background-color:white;padding:5px;border-right:2px solid black;font-weight:bolder;">回饋</div>
                              <div id="page2" class="col-xs-6" style="background-color:white;padding:5px;color:#AAAAAA;">關於</div>
                          </div>


                          <div id="page2-content">
                             <div style="padding:10px;text-align:center;font-size:16px;">{{ $speaker -> description}}</div>
                          </div>

                          <div id="page1-content" >
                              <div style="margin:10px;">
                                <h4>此分享我得到了:</h4>
                              </div>
                            </center>

                              <form role="form" method="POST" action=" {{ url('/speaker', $speaker->id) }} ">
                                {!! csrf_field() !!}
                                          <div class="form-group">
                                             <div class="col-xs-4">
                                                 <div class="checkbox">
                                                      <input type="checkbox" id="1" value="1" name="feeling1[]">
                                                      <label for="1"></label>
                                                      <center>愛</center>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                            <div class="col-xs-4">
                                              <div class="checkbox2">
                                                <input type="checkbox" value="2" id="2" name="feeling1[]">
                                                <label for="2"></label>
                                                <center>使命感</center>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <div class="col-xs-4">
                                             <div class="checkbox3">
                                               <input type="checkbox" value="3" id="3" name="feeling1[]">
                                               <label for="3"></label>
                                               <center>智慧</center>
                                             </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                          <div class="col-xs-4">
                                            <div class="checkbox4">
                                              <input type="checkbox" value="4" id="4" name="feeling1[]">
                                              <label for="4"></label>
                                              <center>實踐力</center>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                         <div class="col-xs-4">
                                           <div class="checkbox5">
                                             <input type="checkbox" value="5" id="5" name="feeling1[]">
                                             <label for="5"></label>
                                             <center>領導力</center>
                                           </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                        <div class="col-xs-4">
                                          <div class="checkbox6">
                                            <input type="checkbox" value="6" id="6" name="feeling1[]">
                                            <label for="6"></label>
                                            <center>啟發</center>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-xs-4">
                                         <div class="checkbox7">
                                           <input type="checkbox" value="7" id="7" name="feeling1[]">
                                           <label for="7"></label>
                                           <center>信心</center>
                                         </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                      <div class="col-xs-4">
                                        <div class="checkbox8">
                                          <input type="checkbox" value="8" id="8" name="feeling1[]">
                                          <label for="8"></label>
                                          <center>創造力</center>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                     <div class="col-xs-4">
                                       <div class="checkbox9">
                                         <input type="checkbox" value="9" id="9" name="feeling1[]">
                                         <label for="9"></label>
                                         <center>其他</center>
                                       </div>
                                     </div>
                                 </div>
                                   <center>
                                    <div class="form-group">
                                      <div class="col-xs-12" style="margin-top:20px;margin-down:20px;">
                                        <button class="btn btn-danger" type="submit" >送出</button>
                                      </div>
                                    </div>
                                  </center>
                                  <br />
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
