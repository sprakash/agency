<?php
echo ' <div class="casestudy-content"><a class="close" href="javascript:parent.$.fancybox.close();" style="top:-9px;right:0;">&nbsp;</a><div class="client">COMPASS GROUP USA</div><div class="span4" style="margin-left:0;"><span class="casestudy-arrow">&nbsp;</span><h2><span class="brand">altogethergreat</span> Associate Brand</h2><h2 class="nextline">and Communications System</h2>
<p style="width:281px;">The leader in foodservice management and support services, Compass Group USA is always striving to do better. At the heart of its businesses are its more than 150,000 associates in thousands of locations.</p>
<p style="width:281px;">Our challenge was to develop a meaningful associate brand and an informative, easy-to-understand communications system.</>
<p style="width:281px;">Interviews with associates directed our work. We learned that the organization’s value proposition, “Great people. Great service. Great rewards.” stirred warm feelings. And we could clearly point to the information associates desired.</p>
<p style="width:281px;">We created the brand “altogethergreat” to connect all the programs and services Compass Group offers its associates. A SharePoint website was designed to market and explain employee programs, using a streamlined and consistent presentation of all information.</p>
<p style="width:281px;">We also developed templates for print communications that follow the structure and style of the website.</p>
</div>
<div class="span7" style="margin-left:46px;padding:60px 0;">
<div class="span4"><h4 style="width:485px;">Components</h4>
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<td width="200">Brand</td><td width="180">Brochure Templates</td><td><a href="http://www.altogethergreat.com" target="_blank">Go to website</a>
</td>
</tr>
<tr>
<td width="200">SharePoint Website</td><td width="180">Powerpoint Templates</td><td width="54">&nbsp;</td>
</tr>
<tr>
<td width="200">Brand Guidelines</td><td width="180">&nbsp;</td><td width="54">&nbsp;</td>
</tr>
</table>
<div class="intro-art-compass">&nbsp;</div>
</div>
</div>
<ul id="canon-casestudy-slideshow" class="casestudy-slideshow" style="clear:both;">
<li><img src="img/casestudy/compass/slide_1.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_2.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_3.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_4.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_5.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_6.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_7.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_8.jpg" width="908" height="541"/></li>
<li><img src="img/casestudy/compass/slide_9.jpg" width="908" height="541"/></li>
</ul>
<span id="prev-area">
	<span id="prev-control">&nbsp;</span>
</span>
<span id="next-area">
	<span id="next-control">&nbsp;</span>
</span>
<div id="pager-num">&nbsp;</div>
</div>';
echo '<script type="text/javascript">
	
	function onAfter(curr,next,opts) {
	var caption =  (opts.currSlide + 1) + " / " + opts.slideCount;
	$("#pager-num").html(caption);
	} 
	
	//slideshows in casestudies
		   	 $("#canon-casestudy-slideshow").cycle({
					pageEvent: "mouseover",
					pause: 1,
					prev:   "#prev-control", 
    				next:   "#next-control",
    				after: onAfter,
    				timeout: 5000,
    				
			});
		
		$("#prev-area").hover(function(){ 
				$(this).children("span").fadeTo("slow",1)
			}, function(){  // mouseout 
				$(this).children("span").fadeTo("slow",0)
			}
		 );
		$("#next-area").hover(function(){ 
					$(this).children("span").fadeTo("slow",1)
			}, function(){  // mouseout 
				$(this).children("span").fadeTo("slow",0)
			}
		 );
   
		
</script>';
?>