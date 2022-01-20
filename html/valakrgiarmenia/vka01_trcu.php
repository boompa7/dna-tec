<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "벨라루스|키르기즈스탄|알메니아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "벨라루스 外 | TRCU"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

		
	.business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:justify; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
	.business_type5 ul{width:100%;}
	.business_type5 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;padding:3%;} /* 박스 안에 컨텐츠와 박스 사이 간격 조화 */
	.business_type5 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type5 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;padding-right:3%;text-align:justify;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    
    table {width: 100%;border: 1px solid #444444;border-collapse: collapse;margin:10px;}
    th, td {border: 1px solid #444444;padding: 10px;}
    

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:1.8em; }
		.business_type5 h2{font-size:1.4em; }
		.business_type5 h3{font-size:0.9em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:3%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:3%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
	}
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
</style>

<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">

	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC 인증 </span>벨라루스|키르기스스탄|아르메니아</h1>
	</div>
	
	<div class="business_type5" class="area">
		<h1>TRCU EAC 인증서 개요</h1>
		<h3>
			TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.<br class="sn">TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.<br><br>
			현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며,  <br class="sn">현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다.  <br><br>
			인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.
			<!----
			 
			   <br class="sn">깊은 감사의 말씀 드리며, <br class="sn">앞으로도 객님의 말씀에 귀 기울이며<br>
			웹기술을 선도하는 RUS TEST PACIFIC가 되도록 <br class="sn">최선을 다하겠습니다.----->				
		</h3>
		
        <p style="display:block;width:20%;margin:0 auto;"><img src="../russia/image/eac_mark01.png" alt="EAC마크"></p><br>
            <span style="display:block;text-align:center;">EAC 공식 마크</span>
		<br><br>
		
		<ul>
			<li>   
                    <dl>
                       <dd>
                        <strong>1. TRCU 관계 법령</strong> 
                       </dd>
                    </dl>
                <span style="margin:10px;">    TRCU 세부 목록은 다음과 같습니다.</span><br><br>				    
                    <table border="1" cellspacing="0" cellpadding="0">
                      <tr>
                          <td rowspan="2"  style="text-align:center;">기술규정 명칭</td>
                          <td style="text-align:center;">기술규정 구체적 내용(국문 명)</td>
                          <td rowspan="2"  style="text-align:center;">품목</td>
                      </tr>
                      <tr>
                          <td style="text-align:center;">(영문 명)</td>
                      </tr>
                      
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;001/2011</td>
                        <td>철도차량 안전 관련 기술규정</td>
                        <td rowspan="2">철도차량</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    railway rolling stock&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;002/2011</td>
                        <td>고속열차    안전 관련 기술규정</td>
                        <td rowspan="2">고속열차</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    high-speed railway transport&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;003/2011</td>
                        <td>철도교통    인프라 안전 관련 기술규정</td>
                        <td rowspan="2">철도교통 인프라</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of railway transport infrastructure&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;004/2011</td>
                        <td>저전압    장비 안전 관련 기술규정</td>
                        <td rowspan="2">저전압 장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    Low-voltage equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;005/2011</td>
                        <td>포장재    안전 관련 기술규정</td>
                        <td rowspan="2">포장재</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    packages&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;006/2011</td>
                        <td>폭죽    안전 관련 기술규정</td>
                        <td rowspan="2">폭죽</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    pyrotechnic articles&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;007/2011</td>
                        <td>유아    및 청소년 용품 안전 관련 기술규정</td>
                        <td rowspan="2">유아 및 청소년 용품</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of products intended for children and adolescents&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;008/2011</td>
                        <td>장난감    안전 관련 기술규정</td>
                        <td rowspan="2">장난감</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    toys&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;009/2011</td>
                        <td>향수    및 화장품 안전 관련 기술규정</td>
                        <td rowspan="2">향수 및 화장품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    perfumes and cosmetics&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;010/2011</td>
                        <td>기계    및 설치장비 안전 관련 기술규정</td>
                        <td rowspan="2">기계 및 장비류</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    machinery and equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;011/2011</td>
                        <td>승강기    안전 관련 기술규정</td>
                        <td rowspan="2">승강기</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    elevators&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;012/2011</td>
                        <td>폭발가능환경    작업을 위한 장비의 안전 관련 기술규정</td>
                        <td rowspan="2">폭발가능대비 보호장비</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of equipment in explosion hazardous environments&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;013/2011</td>
                        <td>연료(휘발유,&nbsp;경유,&nbsp;제트연료)에    대한 기술규정</td>
                        <td rowspan="2">연료(휘발유,&nbsp;경유,&nbsp;제트연료)</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements to motor and aviation petrol, diesel and marine, fuel, reactive    engines fuel and black oil&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;014/2011</td>
                        <td>자동차    도로 안전 기술규정</td>
                        <td rowspan="2">자동차 도로</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    roads&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;015/2011</td>
                        <td>곡물    안전성 관련 기술규정</td>
                        <td rowspan="2">곡물</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of grain&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;016/2011</td>
                        <td>가스연료    장치 안전 관련 기술규정</td>
                        <td rowspan="2">가스연료 장치</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of apparatuses working on gaseous fuel&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;017/2011</td>
                        <td>경공업    제품 안전 관련 기술규정</td>
                        <td rowspan="2">경공업 제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety    of light industry products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;018/2011</td>
                        <td>차륜    차량 안전 관련 기술규정</td>
                        <td rowspan="2">차륜 차량</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    wheeled vehicles&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;019/2011</td>
                        <td>개인보호장비    안전 관련 기술규정</td>
                        <td rowspan="2">개인보호용품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    personal protection equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;020/2011</td>
                        <td>전자제품    전자기 호환성 관련 기술 규정</td>
                        <td rowspan="2">전자제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    Electromagnetic compatibility of technical devices&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;021/2011</td>
                        <td>식품    안전 관련 기술규정</td>
                        <td rowspan="2">식품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    food products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;022/2011</td>
                        <td>식품    라벨링 관련 기술규정</td>
                        <td rowspan="2">식품 라벨링</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of food products in terms of their marking&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;023/2011</td>
                        <td>야채    및 과일음료 기술 규정</td>
                        <td rowspan="2">야채 및 과일음료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    juice products made of fruit and vegetables&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;024/2011</td>
                        <td>유지제품    기술규정</td>
                        <td rowspan="2">유지제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    oil &amp; fat products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;025/2012</td>
                        <td>가구제품    안전 관련 기술규정</td>
                        <td rowspan="2">가구제품</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of furniture&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;026/2012</td>
                        <td>소형선박    안전 관련 기술규정</td>
                        <td rowspan="2">소형선박</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    small-size</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;027/2012</td>
                        <td>건강    기능성 식품 안전 관련 기술규정</td>
                        <td rowspan="2">건강 기능성 식품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    certain types of specialized food products, including food for dietary    treatment and protective diet&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;028/2012</td>
                        <td>폭발성    물질 및 제품 안전 관련 기술규정</td>
                        <td rowspan="2">폭발성 물질 및 제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    explosives and products on their basis&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;029/2012</td>
                        <td>식품    첨가물 안전 규격 관련 기술규정</td>
                        <td rowspan="2">식품 첨가물</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for food additives, flavoring agents and processing supplements&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;030/2012</td>
                        <td>윤활류    규격 관련 기술규정</td>
                        <td rowspan="2">윤활류</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for lubricants, oils and special liquids&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;031/2012</td>
                        <td>농·임업용    트랙터 및 트레일러 안전관련 기술규정</td>
                        <td rowspan="2">농·임업용 트랙터 및 트레일러</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    agricultural and forestry tractors and trailers thereto&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;032/2013</td>
                        <td>고압장비    안전 관련 기술규정</td>
                        <td rowspan="2">고압장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    pressure equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;033/2013</td>
                        <td>우유    및 유제품 안전 관련 기술규정</td>
                        <td rowspan="2">우유 및 유제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On the safety    of milk and dairy products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;034/2013</td>
                        <td>육류    및 육류제품 안전 관련 기술규정</td>
                        <td rowspan="2">육류 및 육류제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    meat and meat products&ldquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    CU&nbsp;035/2014</td>
                        <td>담배제품    관련 기술규정</td>
                        <td rowspan="2">담배제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    tobacco products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    036/2016</td>
                        <td>가스연료의    관련 조건</td>
                        <td rowspan="2">가스연료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for liquified petroleum gases foe use as fuel&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    037/2016</td>
                        <td>전기    및 전자 장비에서 특정 유해 물질의 사용 제한에 관련 기술규정</td>
                        <td rowspan="2">전기 및 전자 장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;Restricting    usage of hazardous substances in the electrical goods and radio electronics&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    038/2016</td>
                        <td>놀이기구의    안전 관련 기술규정</td>
                        <td rowspan="2">놀이기구</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    amusement rides&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    039/2016</td>
                        <td>광물비료    관련 기술규정</td>
                        <td rowspan="2">광물비료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for mineral fertilizers&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">ТR    EAEC&nbsp;040/2016</td>
                        <td>어류    및 어류제품 안전 관련 기술규정</td>
                        <td rowspan="2">어류 및 어류제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    fish and fish products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    041/2017<br>
                          (2021년 6월 2일 시행될 예정)</td>
                        <td>화학물질    안전 관련 기술규정</td>
                        <td rowspan="2">화학물질</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    chemical products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    042/2017</td>
                        <td>어린이    놀이터 안전 관련 기술규정</td>
                        <td rowspan="2">어린이 놀이터</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    chemical products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    043/2017</td>
                        <td>화재지연제    및 소화시스템 관련 기술규정</td>
                        <td rowspan="2">화재지연제 및 소화시스템</td>
                      </tr>
                      <tr>
                        <td>&rdquo; On safety of    equipment for children&rsquo;s playgrounds&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    044/2017</td>
                        <td>생수    및 천연 미네랄 워터의 안전 관련 기술규정</td>
                        <td rowspan="2">생수 및 천연 미네랄 워터</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    packaged drinking water, including natural mineral water&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU    045/2017</td>
                        <td>미네랄    오일 안전 관련 기술규정</td>
                        <td rowspan="2">미네랄    오일</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    oil prepared for transportation and(or) use&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU 046/2018<br>
                          (2022년 1월 1일 시행될 예정)</td>
                        <td>천연가스    안전 관련 기술규정</td>
                        <td rowspan="2">천연가스</td>
                      </tr>
                      <tr>
                        <td>&quot;On    safety of natural flammable gas, prepared for transportation or usage&quot;</td>
                      </tr>
                      <tr>
                        <td rowspan="2">TR EAEU 047/2018</td>
                        <td>알코올    음료의 안전 관련 기술규정</td>
                        <td rowspan="2">알코올 음료</td>
                      </tr>
                      <tr>
                        <td>&quot;On    safety of alcohol products&quot;</td>
                      </tr>
                    </table><!--------------/ TRCU 관계법령 종료 /----------------------->	
			  </li>
            </ul>  
			
			<br>
			
			<ul>
			 <li>
				<dl>
                    <dd><strong>2. TRCU EAC 인증서 유형</strong></dd></dl>

                         <p>TRCU 인증서는 세부사항에 따라 적합성인증(CoC, Certification of Conformity)과 적합성선언(DoC, Declaration of Conformity) 두 가지로 분류됩니다.</p><br><br>
                          
                           <span style="color:#1F88E5">&#10054; TRCU CoC</span> <br> 
                                 압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며, 샘플시험 또는 공장심사가 요구됩니다.<br><br><br><br>
                                 <div id="eac_CoC"><img src="../russia/image/eac_mark03_CoC.png" style="width:30%;display:block;margin-left:auto;margin-right:auto;"><br>
						             <p style="text-align:center;">TRCU EAC 인증서-TRCU CoC</p>
						         </div>	        
                                 
                                 <br>
                                 
                           <span style="color:#1F88E5">&#10054; TRCU DoC</span> <br> 
                                 <p>
                                   비교적 위험성이 작은 일반 제품에 해당되며 일부 제품은 서류심사만으로 인증서 발급이 가능합니다.<br>
                                   CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다.
                                 </p>

                        <div id="eac_CoC2"><img src="../russia/image/eac_mark04_DoC.png" style="width:30%;display:block;margin-left:auto;margin-right:auto;"><br>
						 <p style="text-align:center;">TRCU EAC 인증서TRCU DoC</p><br><br>
						</div>			
			  </li>
			</ul>
			
			<br>
			
			<ul>
			<li>
				<dl>
					<dt>
						<img src="../image/circle_bg1.png" style="display:block;width:250px;">
					</dt>
					<dd>
						<strong>3. TRCU EAC 인증서 유효기간</strong>
                        <p><span style="font-weight: bold;">단일 선적에 대한 인증(One-Shipment: Single Delivery Certification)</span> <br>주로 플랜트 등 단발성(1회성)으로 수출하는 물품인 경우와 제 3자나 다른 일반적인 소비자에게 재판매가 되지 않는 경우에 해당하며 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.</p>
                        <p><span style="font-weight: bold;">연속 생산(Serial Production Certification)</span> <br>계속적인 수출이 예상되는 경우에 유리하며 한 번의 인증을 통해 최대 5년까지 유효한 인증서를 받을 수 있습니다.</p> 
					</dd>
				</dl>	
			</li>
			</ul>
			
		    <br>

            <ul>
               <li>
                 <dl>
            	<dt><img src="../valakrgiarmenia/image/eac_mark08.png"  style="display:block;width:500px;"> </dt>	            
            	<dd>  		
            	<strong>4. TRCU EAC 인증 절차</strong>
                    <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                    <span>2. 서류 검토</span><br><br>
                    <span>3. 적용되는 인증서 유형 확인</span><br><br>
                    <span>4. 샘플 시험 및 공장심사 여부 확인</span><br><br>
                    <span>5. 견적서 발행 및 계약</span><br><br>
                    <span>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                    <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                    <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                    <span>9. 인증서 발행</span><br><br>
            	</dd>
                   </dl>				
              </li>
            </ul>
            
			<br>
			
			<ul>
			<li>
				<dl>
					<dt>
						<div id="eac_CoC"><img src="./image/01_1.jpg" style="display:block;margin-left:auto;margin-right:auto;"><br>
						 <!----p style="text-align:center;">TRCU EAC 인증서</p---->
						</div>						
					</dt>
					<dd>
						<strong>5. TRCU EAC 제출서류</strong>
						제출서류는 다음과 같습니다. (국한되지 않으며 필요에 따라 추가될 수 있습니다.)<br>
                        <p>신청서 (HS Code 포함)</p>
                        <p>기 보유 시험 성적서</p>
                        <p>기 보유 인증서</p>
                        <p>회로도 (해당 시)</p>
                        <p>기술문서</p>
                        <p>제품설명서 (러시아어 또는 수출국 언어)</p>
					</dd>
				</dl>				
			</li>
			</ul>
			
			<br>

			<ul>
			<li>
			    <dl>
                 <dd>
			      <strong>6. 유라시아 인증 신청자</strong>
                 </dd>
                </dl>
				
                          TRCU인증, GOST R인증 등 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 그 업체는 법적 실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.<br>
                          RUS-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.

			</li>
            </ul>
        <br>
        
        <ul>
			<li>
            <dl><dd>
			    <strong>7. Rosakkreditasiya 대장(Register)</strong>
            </dd></dl>
				TRCU인증, GOST R인증 등 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 그 업체는 법적 실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.<br>
                 RUS-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.<br><br>

									
						<!----strong>TRCU 관계 법령</strong------>
						<p><a href="https://www.fsa.gov.ru/">Rosakkreditasiya 웹사이트 바로가기 Click!!</a> </p>
			</li>       
        </ul>
       
        
	    <ul>
			<br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택 </strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span> EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  	</ul>
		  </div>
			
		</ul>
		
	</div>	 <!----< class="business_type5 > 종료------>
</div> <!----< class="content_wrap > 종료------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
     include_once('tail.php');//공통 하단을 연결합니다.
     include_once(G5_THEME_PATH.'/tail.php');//그누보드의 공통 하단을 연결합니다.
?>
<!----?php
	include "../include/tail.php"; 
?----->