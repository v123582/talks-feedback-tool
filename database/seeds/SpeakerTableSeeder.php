<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Speaker;

class SpeakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('speakers')->delete();
      Speaker::create(array(
        'name'     => '朱博湧',
        'photo'     => './images/speaker1.png',
        'vphoto'     => './images/vspeaker1.png',
        'tphoto'     => '../images/tspeaker1.jpg',
        'topic'     => '在人生轉折點如何創造價值？',
        'description' => '長年在教育界開拓、啟發莘莘學子，總是激勵學生「追求卓越、不斷創造價值，找到自己的藍海，做最好的自己！」的朱博湧教授，連續五年獲得《Cheers》雜誌調查的台灣十大EMBA名師之譽、更榮膺2005年中華民國科技管理學會院士。 ',
        'event' => '0', //a.m: 0 ,p.m:1
        'period' => '2016/05/20',
       ));
       Speaker::create(array(
         'name'     => '謝詠芬',
         'photo'     => './images/speaker2.jpg',
         'vphoto'     => './images/vspeaker2.png',
         'tphoto'     => '../images/tspeaker2.jpg',
         'topic'     => '不被看好的成功-女性X創業家',
         'description' => '謝詠芬博士深感台灣產業需求若渴，於2002年創立閎康科技股份有限公司，14年來持續不斷提供高科技業不可或缺之材料分析、故障分析、及可靠度驗證相關服務，將其豐富的知識與經驗提供給客戶，對於產業的成長有莫大貢獻。閎康科技台灣六個實驗室外，在上海張江高科技園區也設立了據點、並在日本設立業務辦事處，持續提供專業分析測試，維持台灣科技產業的全球競爭力。',
         'event' => '0', //a.m: 0 ,p.m:1
         'period' => '2016/05/20',
        ));
        Speaker::create(array(
          'name'     => '方新舟',
          'photo'     => './images/speaker3.png',
          'vphoto'     => './images/vspeaker3.png',
          'tphoto'     => '../images/tspeaker3.jpg',
          'topic'     => '企業家的科技教育願景',
          'description' => '曾任雷凌科技執行長、誠致科技董事長。2011年退休，從此踏上公益之路。創辦了誠致教育基金會，以創業的經驗背景來思索教育的問題。關心教育，關懷偏鄉家庭，也深知教育要成功，最關鍵的因素就是家長和老師，卻發現這是偏鄉最不足的一環。父母為了生計離鄉，而優秀的教育者則容易抓住機會移往都會區，而這更直接擴大了教育的差距。在偶然機緣下，方學長遇見公益平台文化基金會董事長嚴長壽先生，遂加入成為均一學校的董事，開啟與教育家的對話。',
          'event' => '0', //a.m: 0 ,p.m:1
          'period' => '2016/05/20',
         ));
         Speaker::create(array(
           'name'     => '吳錦昌',
           'photo'     => './images/speaker4.png',
           'vphoto'     => './images/vspeaker4.png',
           'tphoto'     => '../images/tspeaker4.jpg',
           'topic'     => '消費改變世界？',
           'description' => '從廣為人知的「南順發、北燦坤」一直到現在的「20 for Future」，順發在大眾的心中，已從成功的通路商成為大型公益企業。2010年起，不顧股東的反對，堅定的走著公益的每一步。賣場裡、臉書上都是與大家分享公益的喜悅及受贈兒童的故事。吳董事長深知唯有讓學習的機會越趨公平，我們就擁有更多機會培養更多的人才，而台灣的美好亦將從這裡開始。接下來他將帶領大家看台灣, 看世界看如何面對因工業4.0而面臨工作機會減少的問題及處境。',
           'event' => '0', //a.m: 0 ,p.m:1
           'period' => '2016/05/20',
          ));
          Speaker::create(array(
            'name'     => '陳瑞文',
            'photo'     => './images/speaker5.png',
            'vphoto'     => './images/vspeaker5.png',
            'tphoto'     => '../images/tspeaker5.jpg',
            'topic'     => '道路會呼吸？',
            'description' => '　極端氣候，地球暖化，JW生態工法因應而生。因其兼具儲水、降溫、防災、降低空污及生態永續的特性，可改善排水問題，使整座城市變成一個與大自然共處的海綿體。陳瑞文董事長致力於運用專業解決環境議題。2015年參加法國巴黎COP21聯合國氣候變遷會議，展現JW生態工法成果。JW生態工法被大會推崇並列為世界公認的解決地球暖化的關鍵技術及最佳捷徑，超越台灣參與歷屆國際氣候會議媒體曝光總量。',
            'event' => '0', //a.m: 0 ,p.m:1
            'period' => '2016/05/20',
           ));
           Speaker::create(array(
             'name'     => '林芳吟',
             'photo'     => './images/speaker6.png',
             'vphoto'     => './images/vspeaker6.png',
             'tphoto'     => '../images/tspeaker6.jpg',
             'topic'     => '用科技啟發興趣，用文化涵養心靈',
             'description' => '領軍頑石以創新的科技成功演繹人文與藝術，從東方的赤壁懷古、圓明園，到西方的馬諦斯、米勒，以新媒體翻轉博物館與典藏文物冷硬的刻板印象。其團隊更以原創性動畫《卡滋幫》打入國外市場，並且採用品牌授權的商業模式為文創產業樹立標竿。致力讓各種文物背後所蘊藏的故事躍然於科技上，不僅激發大眾對藝術的想像與樂趣，也同時實現文化推廣的熱忱及願景，期望能將台灣充沛的創意實力在國舞台上盡情展現。',
             'event' => '0', //a.m: 0 ,p.m:1
             'period' => '2016/05/20',
            ));
            Speaker::create(array(
              'name'     => '簡禎富',
              'photo'     => './images/speaker7.png',
              'vphoto'     => './images/vspeaker7.png',
              'tphoto'     => '../images/tspeaker7.jpg',
              'topic'     => '神奇的大數據',
              'description' => '簡禎富教授專注於決策分析、大數據分析、半導體製造、智能製造、科技管理等研究領域。透過產學合作研究，深耕台灣高科技產業的大數據分析和數位決策技術，以解決產業需求和問題，同時培育結合理論和實務的人才。',
              'event' => '1', //a.m: 0 ,p.m:1
              'period' => '2016/05/20',
             ));
             Speaker::create(array(
               'name'     => '王基旆',
               'photo'     => './images/speaker8.png',
               'vphoto'     => './images/vspeaker8.png',
               'tphoto'     => '../images/tspeaker8.jpg',
               'topic'     => '手機當醫生？',
               'description' => '來自王基旆領導的奧樂團隊，開發鍵盤加密技術，防駭技術不僅成功收服南韓及印尼銀行，開發的開放醫療平台(OHA)更勇奪2015年亞太區資訊科技競賽APICTA的金牌殊榮，其創新的手機針灸服務驚艷各界，期待透過此創舉將醫療產業物聯化與行動化，達到預防醫學的效用。目前已在台灣、大陸以及美國取得多件專利，堅持創新與愛地球的理念創造有益於社會大眾與節能省碳的產品。',
               'event' => '1', //a.m: 0 ,p.m:1
               'period' => '2016/05/20',
              ));
              Speaker::create(array(
                'name'     => '林弘全',
                'photo'     => './images/speaker9.png',
                'vphoto'     => './images/vspeaker9.png',
                'tphoto'     => '../images/tspeaker9.jpg',
                'topic'     => '手機當醫生？',
                'description' => '2012年打造了群眾募資平台flyingV，提供了每個人心中，那一個不論大小的夢想，找到力量及資源的機會，創造了一連串屬於成功的故事，這些『願意改變』的熱血，如他精彩的創業歷程所展現的精神：勇於冒險，並且富著熱情。近年甚至建立創意實驗基地『濕地』空間，幫助人們把好點子實踐，甚至創業。用創意與行動鼓舞著人們與社群網路，啟發人們有著不同的創造力與實踐力。',
                'event' => '1', //a.m: 0 ,p.m:1
                'period' => '2016/05/20',
               ));
               Speaker::create(array(
                 'name'     => '鄭俊德',
                 'photo'     => './images/speaker10.jpg',
                 'vphoto'     => './images/vspeaker10.png',
                 'tphoto'     => '../images/tspeaker10.jpg',
                 'topic'     => '閱讀社群創辦人',
                 'description' => '',
                 'event' => '1', //a.m: 0 ,p.m:1
                 'period' => '2016/05/20',
                ));
    }
}
