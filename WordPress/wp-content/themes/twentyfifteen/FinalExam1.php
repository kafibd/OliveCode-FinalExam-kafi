<?php
/*
  Template Name:Final Exam
 */
?>
<head>
	<title>Final exam of OliveCode</title>
	<link rel="stylesheet" type="text/css" href="../wp-content/themes/twentyfifteen/main-design-responsive.css">
<!-- 	<link rel="stylesheet" type="text/css" href="../wp-content/themes/twentyfifteen/main-design.css"> -->
	
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
				<img src="images/idx-bkphoto1.png" width="988" height="680" />
<!-- 				<img src="../wp-content/themes/twentyfifteen/images/idx-bkphoto1.png" /> -->
			</div>
			<div id="second-one">
				<img src="images/idx-bkphoto2.png" width="836" height="689" />
			</div>
			<div id="third-one">
				<img src="images/idx-bkphoto3.png" width="719" height="542" />
			</div>			
		</div> 
<!--		<div id="circle">  
			<div class="all-circle" style="width: 250px; height: 250px; position: absolute; left: 260px;top: 300px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo1.jpg" style = "height: 250px; margin-left: -62.125748502994px;">
			</div>
			<div class="all-circle" style="width: 170px; height: 170px; position: absolute;left: 350px; top: 560px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo2.jpg" style = "height: 170px; margin-left:-28.3333333333333px;">
			</div>
			<div class="all-circle" style="width: 220px; height: 220px; position: absolute; left: 600px; top: 750px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo3.jpg" style = "height: 220px; margin-left: -44.4943820224719px;">
			</div>
			<div class="all-circle" style="width: 190px; height: 190px; position: absolute; left: 360px; top: 850px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo4.jpg" style="width: 190px; margin-top: -38.57px;">
			</div>
			<div class="all-circle" style="width: 240px; height: 240px; position: absolute; left: 560px; top: 1050px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo5.jpg" style="height: 240px; margin-left: -60.1801801801802px;">
			</div>
			<div class="all-circle" style="width: 230px; height: 230px; position: absolute; left: 240px; top: 1950px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo6.jpg" style="height: 230px; margin-left: -57.6726726726727px;">
			</div>
			<div class="all-circle" style="width: 200px; height: 200px; position: absolute; left: 510px; top: 2100px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo7.jpg" style="width: 200px; margin-top: -40.2px;">
			</div>
			<div class="all-circle" style="width: 220px; height: 220px; position: absolute; left: 810px; top: 2550px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo8.jpg" style="width: 220px; margin-top: -54.56px;">
			</div>
			<div class="all-circle" style="width: 190px; height: 190px; position: absolute; left: 990px; top: 2700px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo9.jpg" style="height: 190px; margin-left: -47.2155688622755px;">
			</div>
			<div class="all-circle" style="width: 300px; height: 300px; position: absolute; left: 360px; top: 3000px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo10.jpg" style="width: 300px; margin-top: -50.1px;">
			</div>
			<div class="all-circle" style="width: 200px; height: 200px; position: absolute; left: 490px; top: 3300px;">
				<img src="../wp-content/themes/twentyfifteen/photo/bln_photo11.jpg" style="width: 200px; margin-top: -33.4px;">
			</div>
		</div>
		<div id="inner-cover">
			<header>
				<div id="site-header">
					<h1>
						<img src="../wp-content/themes/twentyfifteen/images/idx-sitehead.png" width="789" height="479" />
					</h1>
				</div>
			</header>

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
				</article>
				<div class="idx-bkTop">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig01_bk_t.png" width="339" height="443">
				</div>
				<div class="idx-bkMid" style="height: 251px;"></div>
				<div class="idx-bkBtm" style="top: 658px;">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig01_bk_b.png" width="339" height="325">
				</div>
			</div>
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
						<div class="brushLine"></div>
						<div class="nav">
							<ul>
					             <li><a href="javascript:btmOpen('fig02','islandlife.html')">島民のくらし</a></li>
					             <li><a href="javascript:btmOpen('fig02','activity.html')">アクティビティ</a></li>
					             <li><a href="javascript:btmOpen('fig02','craft.html')">カオハガンクラフト</a></li>
				           </ul>
						</div>
					</div>
				</article>
				<div class="idx-bkTop">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig02_bk_t.png" width="513" height="246">
				</div>
				<div class="idx-bkMid" style="height: 46px;"></div>
				<div class="idx-bkBtm" style="top: 256px;">
					<img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig02_bk_b.png" width="513" height="300">
				</div>
			</div>
			<div id="idx-cont_fig03" style="height: 574px;">
				<article>
					<div class="idx-figCont">
						<div class="figImg"><img src="../wp-content/themes/twentyfifteen/images/idx_ti_fig03.png" width="38" height="14" alt="fig01"></div>
						<div class="figTi">
							<h2>カオハガン島に滞在するには</h2>
						</div>
						<div class="figCopy">
							9つの部屋からなる小さなゲストハウス<br>
							「カオハガン・ハウス」へご宿泊ください。
						</div>
						<div class="figTxt">
							「お帰りなさい。」そんな風に出迎えてくれる「カオハガン・ハウス」。名前の通り、南の島に暮らす「家」というのがふさわしい、アットホームな宿泊施設だ。目の前に海が広がるお部屋で、年に数回、潮が満ちると、高床式ロッジの床の下が海になることもある。環礁の中の海は波が立たないので、海に面していても静かで、風が心地よい。
							<br>
							<br>
						
							新鮮な食材で作る美味しい食事は、「カオハガン・ハウス」の自慢だ。美味しい空気の中で、ゆったりと食事をいただくと、こんなにも体が元気になるのかと思う。心も体も綺麗になれる島なのだ。
						</div>
						<div class="brushLine"></div>
							<div class="nav">
								<ul>
						             <li><a href="javascript:btmOpen('fig03','caohaganhouse.html')">カオハガン・ハウス</a></li>
						             <li><a href="javascript:btmOpen('fig03','access.html')">島までのアクセス</a></li>
						             <li><a href="javascript:btmOpen('fig03','expenses.html')">宿泊費用</a></li>
						             <li><a href="javascript:btmOpen('fig03','reservation.html')">宿泊予約</a></li>
						             <li><a href="javascript:btmOpen('fig03','onedaytour.html')">一日体験ツアー</a></li>
						             <li><a href="javascript:btmOpen('fig03','qanda.html')">Q&amp;A</a></li>
						        </ul>
							</div>
					</div>
				</article>
				<div class="idx-bkTop"><img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig03_bk_t.png" width="396" height="273"></div>
				<div class="idx-bkMid" style="height: 155px;"></div>
				<div class="idx-bkBtm" style="top: 392px;"><img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig03_bk_b.png" width="396" height="180"></div>
			</div>
			<div id="idx-cont_fig04" style="height: 463px;">
				<article>
					<div class="idx-figCont">
						<div class="figImg"><img src="../wp-content/themes/twentyfifteen/images/idx_ti_fig04.png" width="38" height="14" alt="fig01"></div>
						<div class="figTi">
							<h2>カオハガンキルト</h2>
						</div>
						<div class="figCopy">
							1992年頃よりはじまった、島民によって創られたキルトは、<br>
							大胆な色彩と自由なデザインが特徴です。</div>
						<div class="figTxt">
							８角形のキルト小屋の扉をすべて開け放って、海を眺めながら、今日も島民のキルターたちがキルトを創っている。手縫いで３ヶ月*かけて一枚を仕上げるというキルトは、島民たちの目に映る島での生活が描かれている。下絵も描かず、自由に布をカットして、つくられる島の情景は、この島に生きる島民たちだからこそ創ることができるのであろう、なんとも生き生きとしている。椰子の木が茂り、動物たちがのびのびと走り回り、海には魚が溢れている。自由奔放で、色鮮やかなキルトには、カオハガン島の魅力がぎゅっと詰まっているのだ。<br>
							<br>
							*シングルサイズのキルトは約3ヶ月かけて、最初から最後まで1人で仕上げます。
						</div>
						<div class="brushLine"></div>
						<div class="nav">
							<ul>
					             <li><a href="javascript:btmOpen('fig04','about.html')">カオハガンキルトについて</a></li>
					             <li><a href="javascript:btmOpen('fig04','gallery.html')">カオハガンキルトギャラリー</a></li>
					             <li><a href="javascript:btmOpen('fig04','quiltgarden.html')">CaohaganQuilt+Garden</a></li>
						    </ul>
						</div>
					</div>
				</article>
				<div class="idx-bkTop"><img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig04_bk_t.png" width="545" height="247"></div>
				<div class="idx-bkMid" style="height: 138px;"></div>
				<div class="idx-bkBtm" style="top: 220px;"><img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig04_bk_b.png" width="545" height="241"></div>
			</div>
			<div id="idx-cont_fig05" style="height: 588px;">
				<article>
					<div class="idx-figCont">
						<div class="figImg"><img src="../wp-content/themes/twentyfifteen/images/idx_ti_fig05.png" width="38" height="14" alt="fig01"></div>
						<div class="figTi">
							<h2>島主コラム</h2>
						</div>
						<div class="figDate">2014年4月7日</div>
						<div class="figTitle">新しい本の出版のお知らせです</div>
						<div class="figTxt">
							私の書いた新しい本が、子どもの本の出版社「福音館書店」から、６月の下旬に出版されます。
							タイトルは『小さな南の島のくらし』です。
							この本は、「たくさんのふしぎ」という月間誌の、８月号として出版されます。
							
							６月の下旬から７月いっぱいは、全国の大きな書店の店頭（児童書の売り場、または雑誌売り場）でお求めになることができます。
							もし店頭にない場合は、書店さんに、「福音館の、たくさんのふしぎ８月号の、『小さな南の島のくらし』を注文したいのですが」と言っていただければ、取り寄せてくれます。
							
							この本は、小学校の中級の子どもたちのために書いたのですが、大人の方々が読んでも、楽しんで、学んでいただける本だと思います。
							
							「たくさんのふしぎ」は、絵本のようなつくりの月刊誌です。
							絵を西村繁男さんに描いていただき、ほんとうにすばらしい出来映えになっています。西村さんは『夜行列車』や『絵で読む広島の原爆』などの絵本作家で、私の大好きな、尊敬をしている方です。
							…
						</div>
						<div class="nav">
							<ul>
							    <li><a href="javascript:btmOpen('fig05','004.html')">続きを読む</a></li>
							</ul>
						</div>
					</div>
				</article>
				<div class="idx-bkTop"><img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig05_bk_t.png" width="395" height="280"></div>
				<div class="idx-bkMid" style="height: 62px;"></div>
				<div class="idx-bkBtm" style="top: 306px;"><img src="../wp-content/themes/twentyfifteen/images/idx_cnt_fig05_bk_b.png" width="395" height="280"></div>
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
		</footer>-->
	</div>
	
</body>