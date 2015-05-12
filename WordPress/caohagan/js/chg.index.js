/************************************************************
 *
 *	CaohaganIsland	- chg.index.js -
 *
 ***********************************************************/
	 
var figNut = 5;


 //-------------------要素位置調整
 
 $(function(){
	 
	 
	 //fig
	 for(var i = 1 ; i <= figNut ; i++){
		 var NUM = 0;
		 
		 if(i < 10){
			 NUM = "0" + i;
		 }else{
			 NUM = i;
		 }
		 
		 
	 
		 var slctFig = "#idx-cont_fig" + NUM;
		 
		 
		 var cntHeight = $(slctFig + " " + "div.idx-figCont").height();
		 
		 var cntBtmPadding = $(slctFig + " " + "div.idx-figCont").css('padding-bottom');
		 var cbm = cntBtmPadding.substr(0,(cntBtmPadding.length - 2 ));
		 
		 var btmTop = cntHeight - $(slctFig + " " + "div.idx-bkBtm").height();
		 var midHeight = cntHeight -  ($(slctFig + " " + "div.idx-bkBtm").height() + $(slctFig + " " + "div.idx-bkTop").height()) + parseFloat(cbm);
		 
		 $(slctFig).height(cntHeight);
		 $(slctFig + " " + "div.idx-bkMid").height(midHeight);
		 $(slctFig + " " + "div.idx-bkBtm").css("top",btmTop);
	 
		 
	 }
	 
	 
	var docHeight = $(document).height();
	 
	 //wrapper 
	 var btmMargin = docHeight + 650 + "px";
	 
	 $("#wrapper-outer").height(btmMargin);
	 
	 
	 //footer
	 docHeight = $(document).height();
	 var footPosi = (docHeight - $("#footer").height());
	 
	 $("#footer").css("top",footPosi);
	 
	 
	 //bkObj
	 $("#bkObj").height(docHeight);
	 
 });