/************************************************************
 *
 *	CaohaganIsland	- chg.balloons.js -
 *
 ***********************************************************/
 
var blnSize = 250
var blnQty = 11;

var blnPath = "#bln .blnImg";

var count = 0;

var ratioOver = 1.3;


//###########################blnサイズプロパティ
var blnS = {0:"250",
            1:"170",
            2:"220",
            3:"190",
            4:"240",
            5:"230",
            6:"200",
            7:"220",
            8:"190",
            9:"300",
            10:"200"
            }
            
            
//###########################bln位置プロパティ
var blnPosi = {
                0:{x:"50",y:"300"},
                1:{x:"140",y:"560"},
                2:{x:"390",y:"750"},
                3:{x:"150",y:"850"},
                4:{x:"350",y:"1050"},
                5:{x:"30",y:"1950"},
                6:{x:"300",y:"2100"},
                7:{x:"600",y:"2550"},
                8:{x:"780",y:"2700"},
                9:{x:"150",y:"3000"},
                10:{x:"290",y:"3300"}
                };


    

//---------------------------配置
$(function(){
    var blnImg = $("#bln img")
	var photoQty = blnImg.length;
    var i;
    
	for(i=0; i<photoQty; i++){
		var blnRef = blnImg.eq(i);
        
		var wrap = "<div class='blnImg'>"  + "</div>";
		
		$(blnRef).wrap(wrap);
        
        var nMax = 10;
        var nMin = 5;
        
        /*var rnd = Math.floor(Math.random()*(nMax-nMin+1))+nMin;
        
		var blnWrapH = blnSize// * (rnd/10);
		var blnWrapW = blnSize// * (rnd/10);*/
        
		var blnCSS = {"border-radius":"50%",
					  "-webkit-border-radius": "50%",
    				  "-moz-border-radius": "50%",
					  "width":blnS[i],
					  "height":blnS[i],
					  "overflow":"hidden",
					  "-moz-box-shadow": "0px 0px 20px rgba(0,0,0,0.5)",
   					  "-webkit-box-shadow": "0px 0px 20px rgba(0,0,0,0.5)",
   					  "box-shadow": "0px 0px 20px rgba(0,0,0,0.5)",
                      "background-color":"#fff"
					}
            
		$(blnPath).eq(i).css(blnCSS);
        
        $("#bln .blnImg img").eq(count).bind("load",function(event){
            var imgPath = $("#bln .blnImg img").eq(count)
            
            var photoHeight = imgPath.height();
            var photoWidth = imgPath.width();
            
            var wrapHeight = $(blnPath).eq(count).height();
            var wrapWidth = $(blnPath).eq(count).width();
            
            var cssObj;
            
            if(photoHeight < photoWidth){
                var ratioW = wrapHeight / photoHeight;
                var sizeW = photoWidth * ratioW;
                
                var ost = (blnS[count]/2) - (sizeW/2);
                
                cssObj = {
                              "height":blnS[count],
                              "margin-left":ost
                             };
            }else if(photoHeight > photoWidth){
                var ratioH = wrapWidth / photoWidth;
                var sizeH = photoHeight * ratioH;
                
                var ost = (blnS[count]/2) - (sizeH/2);
                
                cssObj = {
                              "width":blnS[count],
                              "margin-top":ost
                             };
            }
            
            imgPath.css(cssObj);
            
            count++;
        });
        
	}
	
});
    
$(function(){
    for(var i = 0; i<blnQty; i++){
        
        $(blnPath + ":eq(" + i + ")").css({"position":"absolute",
                                           "left":blnPosi[i].x + "px",
                                           "top":blnPosi[i].y + "px"
                                        });
    }
});

//---------------------------インタラクション
/*$(function(){
    var blnObj = $("#bln .blnImg")
    for(var i = 0; i<blnQty; i++){
        
        blnObj.eq(i).mouseover(function(event){ //-------------OVER
            var target = $(event.currentTarget);
            var targetImg = $(event.target);
            
            var targetH = target.height() * ratioOver;
            var targetW = target.width() * ratioOver;
            
            var ost = target.offset();
            
            var overCSS = {
                "height":targetH,
                "width":targetW,
                "left":ost.left
            }
            
            target.animate(overCSS,300,"easeOutCubic");
            
        });
    };
    
});*/