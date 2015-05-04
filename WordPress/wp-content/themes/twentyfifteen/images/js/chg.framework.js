/************************************************************
 *
 *	CaohaganIsland	- chg.framework.js -
 *
 ***********************************************************/
 



//---------------------------コンテンツオープン

    var cntWrap = "<div id='cntWrap'></div>";
    
    var openCont = function(d,f){
        $("body").append(cntWrap);
        //$("#cntWrap").css("opacity","0");
        //$("#cntWrap").animate({"opacity":"1"},500);
        
        
        var baseAddr =  d;
		var targetUrl =  baseAddr + '/' + f;
		$.ajax({
			   type: 'GET',
			   url: targetUrl,
			   dataType: 'html',
			   success: function(data) {
				   $('#cntWrap').append(data);
                   
                   $('#btmWrap img').each(function(){
                       var obj = $(this);
                       var prop = obj.attr('src');
					   var path = prop.replace('images/',baseAddr+'/images/');
					   
					   $(obj).attr('src',path);
                   });
                   
				   $("#btmWrap").css("opacity","0");
       			   $("#btmWrap").animate({"opacity":"1"},500);
				   //$('#lightbox').animate({"opacity":1},{duration:300});
                   addCustomScroll();
			   },
			   error:function() {
			   }
		});
        
        function addCustomScroll(){
            
            var windowH = $(window).height();
            
            $("#cntWrap").css("height",$(window).height());
            $("#cntWrap").mCustomScrollbar({
                scrollInertia: 0,
                scrollButtons:{
                    scrollType: "continuous"
                },
                advanced:{
                    updateOnContentResize: true
                }
            });
        
        }
    }
        
    function btmOpen(d,f){
        detachScroll();
        openCont(d,f);
    };

    function btmMove(d,f){
        $("#cntWrap").remove();
        openCont(d,f);
    };
        
    
//---------------------------コンテンツクローズ
    
    function closeCont(){
        
		
		$("#cntWrap").remove();

        /*$("#cntWrap").animate({"opacity":"0"},200,
                              function(){
                                  $("#cntWrap").remove();
                              });*/
        
        attachScroll();
    };

//---------------------------BODYスクロール無効化

    var scrollTop;
    
    function detachScroll(){
        scrollTop = $(window).scrollTop();
        $('body').addClass('noscroll').css('top', (-scrollTop) + 'px');  
    };
    
//---------------------------BODYスクロール有効化
    
    function attachScroll(){
        $('body').removeClass('noscroll');
        $(window).scrollTop(scrollTop);
    };
    