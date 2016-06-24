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

                          @if($speaker->id == 10)
                          <div id="page2-content">
                             <div style="padding:10px;text-align:center;font-size:16px;">
                                <div id="p1">林崇偉</div><div id="content1">林崇偉是推動友善城市環境資訊服務的众社會企業創辦人。對他來說，众社會企業就是他在體制外的X SCHOOL（是的，他愛X教授），他期許众是個平台，凡是想要多瞭解無障礙、身障者、高齡者、還有友善服務，然後，覺得自己很想，並且也可以做點事情的人（包含：你朋友想做，或你自己想做的、或還沒想到，所以打算跟我們一起做），那麼，他們就覺得你／妳是伙伴，很樂意幫忙你／妳，把想法付諸為行動，實踐出來。相信自己，你可以成為一位真正的智慧城市未來設計師！</div>
                                <div id="p2">林之晨</div><div id="content2">Jamie 第一次創業在 1999 年，和同學共同創辦了 B2C 電腦零售網站哈酷網。也曾先後服務於 HSS Ventures 與 All Asia Partners 等創投公司。現為 AppWorks 之初創投創始合夥人。AppWorks 主要透過 AppWorks Accelerator 創業加速器，全力幫助早期團隊創業，推動台灣成為世界一流的網路產業聚落。是少數專注在電商、網路、移動等領域的早期創投。並長期在個人網誌 MR JAMIE 發表創業文章，積極推廣創業精神。</div>
                                <div id="p3">吳庭安</div><div id="content3">吳庭安專業為玻璃材料的創新研發與工廠之最佳化設計，歸國後在台積電接觸跨國企業之經營投資決策與營運資源規劃的實務分析。而後任職於春池玻璃公司，第一個投資案，就進行新發泡材料之導入研發，並於2013年中正式量產，截至2015年此材料帶動約上億之營業額。
由於對資源再生與玻璃材料有獨特的熱誠與興趣，迥異於一般年輕學子朝自我獨立並崇尚創業的風格，而堅持於”創舊”，希望能延續綠色產業資源的發展，期許為台灣創造屬於獨一無二的特殊產業，並致力於永續經營之綠能產業。</div>
                                <div id="p4">鄭俊德</div><div id="content4">18歲的那年罹患大病，在醫生宣告復發率隨時有50％以上的提醒下，開始尋找人生的意義與價值之旅，最後在閱讀裡找到答案「以愛為核心，成為別人生命的需要」。
而後大學念的是醫學工程，深知閱讀對人的幫助與價值，在臉書創辦了閱讀社群，一開始因著興趣，只分享自己閱讀到的好故事。沒想到，「好故事」不僅吸引讀者，還感動更多讀者投稿分享，許多司機、工人，在鼓勵下開始寫出自己的故事。</div>
                             </div>
                          </div>
                          @else
                          <div id="page2-content">
                             <div style="padding:10px;text-align:center;font-size:16px;">{{ $speaker -> description}}</div>
                          </div>
                          @endif

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
                $('#page1-content').remove();
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
