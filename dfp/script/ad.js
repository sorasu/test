 var IsOpen = false;
    var smallAd = null;
    var bigAd = null;
   // var TimerDuration = 8000; //紀錄計時器秒數
    var ShowTimerHandle = 0;
    var HideTimerHandle = 0;
    var FullSize = 0;
	var timecount = 0;
	var stimer=null;
	window.setInterval("timecount=timecount+1",1000)
	
$(document).ready(function() {
            bigAd = $(".myFlash_Large"); 
            smallAd = $(".myFlash_Small");
    });
    //當使用者點了之後要做的事情
    
        //隱藏函數
    
    function SlideOpen() {
      
       $("#IndexCover").stop().animate({ height: 250 },800,function(){
            smallAd.hide();
            
            //smallAd.show();
            //bigAd.hide();
        }),bigAd.show();
       //bigAd.empty();
       //bigAd.html(clone);
    };
    function SlideClose() {
        //clearTimeout(closeTimer);
		clearTimeout(stimer);
/*        $("#IndexCover").stop().animate({ height: 250 },
            function(){
               
            }),bigAd.hide(),smallAd.show();

        bigAd.hide();

        var clone = bigAd.get(0).cloneNode(true);

        //console.log(clone);
//
        var $clone = $(clone); // JQUERY object

        bigAd.empty().html($clone.html());
*/
bigAd.hide();
            $("#IndexCover").stop().animate({ height: 250 },800,function(){
               smallAd.show();
            });
        };
		
		   

        function HideSlideBanner() {
            bigAd.hide();
            smallAd.show();
            var clone = bigAd.get(0).cloneNode(true);

        //console.log(clone);

        var $clone = $(clone); // JQUERY object

        bigAd.empty().html($clone.html());
        };

    function PushDownOpen(){
             $("#PushDown").stop().animate({ height: 465 },function(){
               
            }),PushDown_S.hide(),PushDown_B.show();
        };
     function PushDownClose(){
             $("#PushDown").stop().animate({ height: 0 },function(){
               PushDown_B.hide();
            }),PushDown_S.show('slow');
        };





    function ShowOutSideBanner(){
        $('#ad-floatRight').show();
        $('#ad-floatLeft').show();
    }
    function HideCrazyAD(){
        //ADclone=$("#ad-FullSize").clone(true);
		$('#ad-FullSize').hide();
        //SlideUp();
        $('#ad-floatRight').show();
        $('#ad-floatLeft').show();
        $('#ad-pushNone').show();

    }
    function ShowCrazyAD(){
        //alert('ok');
		$('#ad-FullSize').show();
        $('#ad-floatLeft').hide();
        $('#ad-floatRight').hide();
    }
  

        $(document).ready(function() {
            smallAd = $(".myFlash_Small"); //小的flash div 名稱;
            bigAd = $(".myFlash_Large"); //大的flash div 名稱;
            smallAd.show();
            PushDown_S=$(".ADBanner");
            PushDown_B=$(".PushDown");
            PushDown_B.show();
           
        });
    //執行
    function ChgBodyDivBgColor(v){
        document.getElementById('index_main_body').style.backgroundColor=v;
    }
   
//FullSize 

