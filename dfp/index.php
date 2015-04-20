<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DFP demo</title>
        <link rel="stylesheet" href="http://www.gq.com.tw/mobile/ie-mobile.css" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- DFP -->
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
var mapping_c = googletag.sizeMapping().
  addSize([1280, 800], [640, 640]).
  addSize([1080, 1920], [640, 640]). // 8 (3%) - Samsung Note 3, S4, SONY Z
  addSize([1024, 768], [640, 640]).
  addSize([1024, 600], [640, 640]).
  addSize([966, 604], [640, 640]).
  addSize([960, 600], [640, 640]).
  addSize([768, 1280], [640, 640]).
  addSize([720, 1280], [640, 640]). // 5 (6%) - Samsung, SONY, Moto
  addSize([640, 960], [640, 640]).
  addSize([640, 360], [640, 640]).
  addSize([598, 360], [640, 640]). // 9 (1%)
  addSize([568, 320], [640, 640]).
  addSize([565, 203], [640, 640]). // viewport (1%)
  addSize([540, 960], [480, 480]). // 11 (1%) - Moto
  addSize([480, 800], [480, 480]). // 10 (1%) - SONY X1, Acer, HTC, LG, Nokia Lumia, Samsung 
  addSize([480, 320], [480, 480]).
  addSize([460, 768], [480, 480]).
  addSize([424, 753], [414, 414]).
  addSize([414, 736], [414, 414]). // 6 (4%) - iPhone 6+
  addSize([392, 579], [414, 414]). // iPhone 6+ viewport
  addSize([384, 640], [414, 414]). // Lumia 920 CSS resolution
  addSize([375, 667], [375, 375]). // 3 (10%) - iPhone 6
  addSize([353, 510], [375, 375]). // iPhone 6 viewport
  addSize([360, 640], [360, 360]). // 2 (25%) - HTC One, Samsung, Nokia, SONY  
  addSize([360, 592], [360, 360]). // 4 (10%) - Android phones, e.g., Nexus 5
  addSize([338, 435], [360, 360]). // width 360's viewport  
  addSize([320, 568], [320, 320]). // 1 (26%) - iPhone 5
  addSize([320, 533], [320, 320]).  
  addSize([320, 480], [320, 320]). // 7 (4%) - iPhone, HTC desire, LG, Moto, Samsung
  addSize([0, 0], [320, 320]).
  build();
  
var mapping_b = googletag.sizeMapping().
  addSize([1280, 800], [640, 100]).
  addSize([1080, 1920], [640, 100]). // 8 (3%) - Samsung Note 3, S4, SONY Z
  addSize([1024, 768], [640, 100]).
  addSize([1024, 600], [640, 100]).  
  addSize([966, 604], [640, 100]).
  addSize([960, 600], [640, 100]).
  addSize([768, 1280], [640, 100]).
  addSize([720, 1280], [640, 100]). // 5 (6%) - Samsung, SONY, Moto 
  addSize([640, 960], [640, 100]).  
  addSize([640, 360], [640, 100]).
  addSize([598, 360], [640, 100]). // 9 (1%)
  addSize([568, 320], [640, 100]).
  addSize([565, 203], [640, 100]). // viewport (1%)  
  addSize([540, 960], [480, 74]). // 11 (1%) - Moto
  addSize([480, 800], [480, 74]). // 10 (1%) - SONY X1, Acer, HTC, LG, Nokia Lumia, Samsung 
  addSize([480, 320], [480, 74]). 
  addSize([424, 753], [414, 64]).  
  addSize([414, 736], [414, 64]). // 6 (4%) - iPhone 6+
  addSize([392, 579], [414, 64]). // 6 (4%) - iPhone 6+ viewport
  addSize([384, 640], [414, 64]). // Lumia 920 CSS resolution 
  addSize([375, 667], [375, 57]). // 3 (10%) - iPhone 6
  addSize([353, 510], [375, 57]). // 3 (10%) - iPhone 6 viewport  
  addSize([360, 640], [360, 56]). // 2 (25%) - HTC One, Samsung, Nokia, SONY   
  addSize([360, 592], [360, 56]). // 4 (10%) - Android phones, e.g., Nexus 5
  addSize([338, 435], [360, 56]). // width 360's viewport
  addSize([320, 568], [320, 50]). // 1 (26%) - iPhone 5
  addSize([320, 533], [320, 50]).    
  addSize([320, 480], [320, 50]). // 7 (4%) - iPhone 3GS, HTC desire, LG, Moto, Samsung
  addSize([0, 0], [320, 50]).  
  build();  

googletag.defineSlot('/25588978/gq_mobile_home_c1', [[320, 320], [360, 360], [375, 375], [414, 414], [480, 480], [640, 640]], 'gq_mobile_home_c1').defineSizeMapping(mapping_c).addService(googletag.pubads());
googletag.defineSlot('/25588978/gq_mobile_home_c2', [[320, 320], [360, 360], [375, 375], [414, 414], [480, 480], [640, 640]], 'gq_mobile_home_c2').defineSizeMapping(mapping_c).addService(googletag.pubads());
googletag.defineSlot('/25588978/gq_mobile_home_c3', [[320, 320], [360, 360], [375, 375], [414, 414], [480, 480], [640, 640]], 'gq_mobile_home_c3').defineSizeMapping(mapping_c).addService(googletag.pubads());
googletag.defineSlot('/25588978/gq_mobile_home_b1', [[320, 50], [360, 56], [375, 57], [414, 64], [480, 74], [640, 100]], 'gq_mobile_home_b1').defineSizeMapping(mapping_b).addService(googletag.pubads());

googletag.defineSlot('/25588978/gq_home_girl_r1_300x250', [300,250], 'gq_home_girl_r1_300x250').addService(googletag.pubads());

//googletag.pubads().enableSyncRendering();
googletag.pubads().enableSingleRequest();
googletag.pubads().enableVideoAds();
googletag.pubads().collapseEmptyDivs(true);
// hide DFP slot were no ad's rendered
googletag.pubads().addEventListener('slotRenderEnded', function(event) {
      console.log(event.slot.getAdUnitPath().split("/")[2] + ' is empty:' + event.isEmpty);
	  if (event.isEmpty)
		$("."+event.slot.getAdUnitPath().split("/")[2]).hide();
    });
googletag.enableServices();
});
</script>
<!-- END DFP -->
    </head>
    <body>
	<!-- DFP -->
        <h3 class="gq_home_girl_r1_300x250">gq_home_girl_r1_300x250</h3>
        <div id='gq_home_girl_r1_300x250' style="float:right;"></div>         
        <br><br>                
        <h3 class="gq_mobile_home_c1">gq_mobile_home_c1</h3>
        <div id='gq_mobile_home_c1'></div>
        <br><br>
        <h3 class="gq_mobile_home_c2">gq_mobile_home_c2</h3>
        <div id='gq_mobile_home_c2'></div>        
        <br><br>
        <h3 class="gq_mobile_home_c3">gq_mobile_home_c3</h3>
        <div id='gq_mobile_home_c3'></div>        
        <br><br>        
        <h3 class="gq_mobile_home_b1">gq_mobile_home_b1</h3>
        <div id='gq_mobile_home_b1'></div> 
        
        <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('gq_mobile_home_c1'); });            
        googletag.cmd.push(function() { googletag.display('gq_mobile_home_c2'); });
        googletag.cmd.push(function() { googletag.display('gq_mobile_home_c3'); });
        googletag.cmd.push(function() { googletag.display('gq_mobile_home_b1'); });
        googletag.cmd.push(function() { googletag.display('gq_home_girl_r1_300x250'); });
        </script>
	<!-- END DFP -->
    </body>
</html>
