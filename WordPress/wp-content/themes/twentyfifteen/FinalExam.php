<?php
/*
  Template Name:Final Exam
 */
?>
<head>
	<title>Final exam of OliveCode</title>
<!-- 	<link rel="stylesheet" type="text/css" href="../wp-content/themes/twentyfifteen/main-design-responsive.css"> -->
	<link rel="stylesheet" type="text/css" href="../wp-content/themes/twentyfifteen/main-design.css">
	
	<script type="text/javascript" src="/jquery-1.3.2.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		//this place is not accessible from image href=?
		//so the function is placed outside which means it is global now.
	});
	var cntWrap = "<div id='cntWrap'></div>";
	
	function btmOpen(d, f){
		$("body").append(cntWrap);
        //$("#cntWrap").css("opacity","0");
        //$("#cntWrap").animate({"opacity":"1"},500);
        
        
        var baseAddr =  "http://www.caohagan.com/" + d;
		var targetUrl =  baseAddr + '/' + f;
		/*alert(targetUrl);*/
		$.ajax({
			   type: 'GET',
			   url: targetUrl,
			   dataType: 'html',
			   success: function(data) {
				   $('#cntWrap').append(data);
                   //this id is coming from imported html file
                   $('#btmWrap img').each(function(){
                       var obj = $(this);
                       var prop = obj.attr('src');
					   var path = prop.replace('images/',baseAddr+'/images/');
					   
					   $(obj).attr('src',path);//source path changes here
                   });
                   
				   $("#btmWrap").css("opacity","0");
       			   $("#btmWrap").animate({"opacity":"1"},500);
				   //$('#lightbox').animate({"opacity":1},{duration:300});
                 /*  addCustomScroll();*/
			   },
			   error:function() {
			   },
		})
	};	
</script>

<body>
	<div id="outer-cover">
		<div id="centering-container">
			<div id="first-one">
				<img src="../wp-content/themes/twentyfifteen/images/idx-bkphoto1.png" width="988" height="680" />
<!-- 				<img src="../wp-content/themes/twentyfifteen/images/idx-bkphoto1.png" /> -->
			</div>
			<div id="second-one">
				<img src="../wp-content/themes/twentyfifteen/images/idx-bkphoto2.png" width="836" height="689" />
			</div>
			<div id="third-one">
				<img src="../wp-content/themes/twentyfifteen/images/idx-bkphoto3.png" width="719" height="542" />
			</div>			
		</div> 
		<div id="circle">
<!-- 			left: 50px; top: 300px; -->
			<div class="all-circle" style="width: 250px; height: 250px; position: absolute; left: 260px;top: 300px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo1.jpg" style = "height: 250px ;margin-left: -62.125748502994px;">
			</div><!-- 1 -->
			<div class="all-circle" style="width: 170px; height: 170px; position: absolute;left: 350px; top: 560px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo2.jpg" style = "height: 170px; margin-left:-28.3333333333333px;">
			</div><!-- 2 -->
			<div class="all-circle" style="width: 220px; height: 220px; position: absolute; left: 600px; top: 750px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo3.jpg" style = "height: 220px; margin-left: -44.4943820224719px;">
			</div><!-- 3 -->
			<div class="all-circle" style="width: 190px; height: 190px; position: absolute; left: 360px; top: 850px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo4.jpg" style="width: 190px; margin-top: -38.57px;">
			</div><!-- 4 -->
			<div class="all-circle" style="width: 240px; height: 240px; position: absolute; left: 560px; top: 1050px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo5.jpg" style="height: 240px; margin-left: -60.1801801801802px;">
			</div><!-- 5 -->
			<div class="all-circle" style="width: 230px; height: 230px; position: absolute; left: 240px; top: 1950px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo6.jpg" style="height: 230px; margin-left: -57.6726726726727px;">
			</div><!-- 6 -->
			<div class="all-circle" style="width: 200px; height: 200px; position: absolute; left: 510px; top: 2100px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo7.jpg" style="width: 200px; margin-top: -40.2px;">
			</div><!-- 7 -->
			<div class="all-circle" style="width: 220px; height: 220px; position: absolute; left: 810px; top: 2550px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo8.jpg" style="width: 220px; margin-top: -54.56px;">
			</div><!-- 8 -->
			<div class="all-circle" style="width: 190px; height: 190px; position: absolute; left: 990px; top: 2700px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo9.jpg" style="height: 190px; margin-left: -47.2155688622755px;">
			</div><!-- 9 -->
			<div class="all-circle" style="width: 300px; height: 300px; position: absolute; left: 360px; top: 3000px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo10.jpg" style="width: 300px; margin-top: -50.1px;">
			</div><!-- 10 -->
			<div class="all-circle" style="width: 200px; height: 200px; position: absolute; left: 490px; top: 3300px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo11.jpg" style="width: 200px; margin-top: -33.4px;">
			</div><!-- 11 -->
		</div>
		<div id="inner-cover">
			<header>
				<div id="site-header">
					<h1>
						<img src="../wp-content/themes/twentyfifteen/images/idx-sitehead.png" width="789" height="479" />
					</h1>
				</div>
			</header>
<!-- 				yellow circle -->
			<div id="news01" class="news">
				<div class="article">
					<a href="" style="text-decoration: none">
						<h4 style="margin-left:50px;">お知らせ</h4>
							<dl>
								<dt>2014年6月25日</dt>
								<dd>島主コラムを更新しました。</dd>
							</dl>
						<img src="../wp-content/themes/twentyfifteen/images/tmp_arrow-a.png">
					</a>
				</div>
			</div>
			<div id="news02" class="news">
				<div class="article">
					<a href="" style="text-decoration: none">
						<h4 style="margin-left:50px;">お知らせ</h4>
							<dl>
								<dt>2014年10月8日</dt>
								<dd>カオハガン・ハウス求人　2014年12月末まで</dd>
							</dl>
						<img src="../wp-content/themes/twentyfifteen/images/tmp_arrow-a.png">
					</a>
				</div>
			</div>
<!-- 			/* five posts on different five figures*/ -->
<!-- 			fig.01 -->
			<div id="idx-cont_fig01" style="height: 985px;">
				<article>
					<div class="idx-figCont">
						<div class="figImg">
							<img src="../wp-content/themes/twentyfifteen/images/idx_ti_fig01.png" width="36" height="14" alt="fig01">
						</div>
						<div class="figTi">
							<h2>なにもなくて豊かな島<br>
							“カオハガン島”について</h2>
						</div>
						<div class="figCopy">
							フィリピン・セブ島から小船に乗ってすぐ近く。東京ドーム一杯分くらいの小さな島に、約600人ほどの島民がゆったりと暮らしています。
						</div>
						<div class="figTxt">
							<span style="font-weight:bold">カオハガン島で、<br>
							ほんとうのあなたにかえってほしい</span><br>
							<br>
							今から二十数年前、私は、南の海に浮かんでいた小さな島を買ってしまった。
							
							幼かったころから海が大好きで、その海の彼方にある国々、そこに暮らしている人々にいつも惹かれていた。
							
							そして、ほんとうに偶然に、夢のような美しい南の島に出会うことができ、そこで暮らすようになった。神の采配としか思えない、うれしい出会いだった。
							
							豊かな海洋の自然に包まれて、その恵みをいただき、必要以上の量を採らず、ゆったりと自然の時間に身を任せながら、その日を満ち足りて暮らす。
							
							そんな「何もなくて豊かな」日々を、島民たちと一緒になって過ごしてきた。
							
							そんな暮らしに、「今、私たちが学ぶことがたくさんある」と、最近になって強く思うようになっている。
							
							今までに、たくさんの方々がカオハガン島を訪れ、穏やかな風に吹かれて、ゆったりと楽しい日々を過ごしてくれた。
							
							あなたにも、ぜひカオハガンに来ていただいて、とにかく楽しんでいただき、そしてほんとうの自分を取り戻し、これからの暮らしについて考えてもらいたいのだ。
							
							島でお会いできるのを、心から楽しみにしています。<br>
							<br>
							島主崎山克彦
						</div>
						
						<!-- / .figTxt -->
						<div class="brushLine"></div>
						<div class="nav">
							<ul>
					             <li><a href="javascript:btmOpen('fig01','about.html')">カオハガン島の概要</a></li>
					             <li><a href="javascript:btmOpen('fig01','history.html')">島の沿革</a></li>
					             <li><a href="javascript:btmOpen('fig01','caohagan2050.html')" class="cnt">カオハガン2050</a></li>
					             <li><a href="javascript:btmOpen('fig01','ngo.html')" class="cnt">NGO南の島から</a></li>
					             <li><a href="javascript:btmOpen('fig01','sanctuary.html')" class="cnt">熱帯珊瑚礁保護区</a></li>
					             <li><a href="javascript:btmOpen('fig01','islandmaster.html')" class="cnt">島主紹介</a></li>
							</ul>
						</div>
					</div>
					<!-- / .idx-figCont -->
				</article>
				<div class="idx-bkTop">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig01_bk_t.png" width="339" height="443">
				</div>
				<div class="idx-bkMid" style="height: 251px;"></div>
				<div class="idx-bkBtm" style="top: 658px;">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig01_bk_b.png" width="339" height="325">
				</div>
			</div>
<!-- 			fig.02 -->
			<div id="idx-cont_fig02" style="height: 558px;">
				<article>
					<div class="idx-figCont">
						<div class="figImg">
							<img src="../wp-content/themes/twentyfifteen/images/idx_ti_fig02.png" width="38" height="14" alt="fig01">
						</div>
						<div class="figTi">
							<h2>カオハガン島さんぽ</h2>
						</div>
						<div class="figCopy">ココ梛子の茂る五万平米の島と、その周りを囲む大きな珊瑚礁の海全体を使って、ゆっくり、のんびりとお過ごしください。</div>
						<div class="figTxt">
							カオハガン島に吹く風には表情がある。優しく肌を撫でてくれるから、島の風にあたるだけで、なんだか、ほっとする。海岸線を歩いてみる。目の前には白砂が広がり、透き通る海に続いている。遠くにマクタン、セブの町並みがうっすらと見えるけど、周りに聞こえてくるのは、鳥や虫や、葉ずれの音。波のたたない鏡のように滑らかな水面に反射してゆく海鳥たち。その海の中を島民がおかずを探して歩いている。小学校から子ども達のにぎやかな声が聞こえてきた。すれ違うとはにかんだ笑顔で挨拶をしてくれる。
							小学校を通り過ぎて、途中にニワトリの歓声を浴びながら、村に行く。島民達は思い思いに、キルトを縫ったり、洗濯をしたり、うたた寝をしたり。のんびりとしたカオハガンタイムが流れている。
							男性達は昼間からラムコークとギターを片手に、陽気に歌い、一緒に飲んでいかないかと誘われる。木漏れ日の中で、歌と踊りと、酒と仲間と・・・最高の時間だ。
							今日も美しい夕日が空を赤く染め、そのうちに一番星が顔を出す。満天の星空が広がり、今日も一日の終わりを告げる。
						</div>
						<!-- / .figTxt -->
						<div class="brushLine"></div>
						<div class="nav">
							<ul>
					             <li><a href="javascript:btmOpen('fig02','islandlife.html')">島民のくらし</a></li>
					             <li><a href="javascript:btmOpen('fig02','activity.html')">アクティビティ</a></li>
					             <li><a href="javascript:btmOpen('fig02','craft.html')">カオハガンクラフト</a></li>
				           </ul>
						</div>
					</div>
					<!-- / .idx-figCont -->
				</article>
				<div class="idx-bkTop">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig02_bk_t.png" width="513" height="246">
				</div>
				<div class="idx-bkMid" style="height: 46px;"></div>
				<div class="idx-bkBtm" style="top: 256px;">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig02_bk_b.png" width="513" height="300">
				</div>
			</div>
		</div>
		<footer >
			<div id="foot-container" style="top: 3612px; background-image:url('../wp-content/themes/twentyfifteen/images/foot_bk.png')">
				<img src="../wp-content/themes/twentyfifteen/images/foot_bird1.png" width="122" height="112" id="bird1">
				<img src="../wp-content/themes/twentyfifteen/images/foot_bird2.png" width="118" height="104" id="bird2">
				<img src="../wp-content/themes/twentyfifteen/images/foot_tree.png" width="162" height="190" id="tree">
				<img src="../wp-content/themes/twentyfifteen/images/foot_logo.png" alt="Caohagan Island" width="344" height="75" id="logo">
				<img src="../wp-content/themes/twentyfifteen/images/foot_copyright.png" alt="Copyright(C)2013 Caohagan Island All Rights Reserved." width="280" height="11" id="copyright">
			</div>
		</footer>
	</div>
	
</body>