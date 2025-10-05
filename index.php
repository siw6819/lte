<?php
	$google_maps_key = 'ABQIAAAA_ojfK3vF23GnCxZyBVn9oBRWTgfMtC2yHH6KBVDiO6KktBReHxQOFmmCCQI1Iqy60vxj3FWr_tHY_Q';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="We offer services including tyres, exhausts, MOT repairs, car servicing and more" />
<meta name="keywords" content="tyres, exhausts, car servicing, MOT repairs, MOT test, warranty servicing, tracking" />
<title>Lytham Tyres, Exhausts, Servicing, MOT Repairs &amp; more..</title>
<link rel="shortcut icon" href="favicon.ico" type="image/ico"/>
<link href="includes/site.css" rel="stylesheet" type="text/css" />
<script src="includes/jquery.1.4.min.js" type="text/javascript"></script>
<script src="includes/jquery.qtip.min.js" type="text/javascript"></script>
<link href="includes/jquery.qtip.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="JavaScript"><!--//
var $j = jQuery.noConflict();
$j(function(){
    $j('a.interactive').qtip({
    	content: {
      		text: 'Click and hold your left mouse button, and drag, to move around the map below. Use your mousewheel to zoom in and out. Alternatively, click on Get Directions above to open up a full size map.'
   		},
   		style: {
      		classes: 'ui-tooltip-jtools',
      		width: 220
   		},
   		position: {
	    	my: 'top left',
	    	at: 'bottom left'
		}
   	});
});
//--></script>
<?php if( preg_match("/lythamtyres/", $_SERVER['SERVER_NAME']) ){ ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26615990-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php } ?>
</head>
<body>
	<div id="container">
		
		<!-- header -->
		<div id="header">
			<p>Telephone<br/>Lytham St.Annes<br/><span>(01253) 794671</span></p>
		</div>

		<div id="content">
			<div class="floaters intro">
				<h1>Welcome to Lytham Tyres &amp; Exhausts</h1>
				<p>Lytham Tyres & Exhausts has been established in Lytham since 1989. We offer a range of services including tyres, exhausts, tracking, MOT preparation and repairs, and car servicing.</p>
				<p>We can also take your car for an MOT test at the standard MOT charge and use original equipment specification parts so we can service your cars under warranty.</p>
				<p>Our opening hours are <strong>Monday to Friday 8.30am to 5.30pm</strong>, excluding bank holidays.</p>
			</div>
			
			<div class="floaters brands">
				<img src="images/dunlop.gif" alt="Dunlop tyres in Lytham St.Annes" title="We fit Dunlop tyres"/>
				<img src="images/michelin.gif" alt="Michelin tyres in Lytham St.Annes" title="We fit Michelin tyres"/>
				<img src="images/pirelli.gif" alt="Pirelli tyres in Lytham St.Annes" title="We fit Pirelli tyres"/>
				<img src="images/goodyear.gif" alt="Goodyear tyres in Lytham St.Annes" title="We fit Goodyear tyres"/>
			</div>
			
			<div class="floaters map">
				<a class="interactive" href="#">Interactive Map</a>
				<a class="directions" target="_blank" href="http://maps.google.co.uk/maps?f=d&source=s_d&z=16&saddr=&daddr=Lytham+Tyres+%26+Exhausts,+13A+Pleasant+Street,+Lytham+Saint+Annes,+Lancashire+FY8+5JA">Get Directions</a>
				<div class="clearfloat"><!--fill--></div>
				
				<div id="mapshadow">
					<div id="gmap_div" class="googleMap" style="width:294px;height:186px;">
					<img src="images/13a-pleasant-street-lytham.gif" width="294" height="186" alt="Find Lytham Tyres &amp; Exhausts"/>
					</div> 
					<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $google_maps_key; ?>" type="text/javascript"></script> 
					<script language="JavaScript" type="text/javascript">
						var map = new GMap2(document.getElementById("gmap_div"), { size: new GSize(294, 186) } );
						map.addControl(new GSmallMapControl());
						map.enableScrollWheelZoom();
						positionMarker(new GLatLng(53.738026,-2.962317));
						function positionMarker(point) {
							map.setCenter(point, 15);
							var marker = new GMarker(point);
							map.addOverlay(marker);
						}
					</script>
				</div>
				
				<p class="findus">Find us at <a target="_blank" href="http://maps.google.co.uk/maps?f=d&source=s_d&z=16&saddr=&daddr=Lytham+Tyres+%26+Exhausts,+13A+Pleasant+Street,+Lytham+Saint+Annes,+Lancashire+FY8+5JA">13A Pleasant Street</a>, Lytham St.Annes</p>
			</div>
			<div class="clearfloat"><!--fill--></div>
		</div>
		
		<div id="subcontent"><!--fill--></div>
		
		<div id="tiles">
			<img src="images/tile-tyres.jpg"/>
			<img src="images/tile-exhausts.jpg"/>
			<img src="images/tile-servicing.jpg"/>
			<img class="last" src="images/tile-mot.jpg"/>
		</div>
		
		<h2 id="services">Full List of Services:</h2>
			
		<p class="list">Tyres, Exhausts, Puncture Repairs, Computerised Balancing, Tracking, Servicing, Radiators, Brakes, Batteries, Wheel Alignment, Timing Belts, MOT repairs, Full Vehicle Maintenance, Diagnostics and more..</p>
		
		<!-- footer -->
		<div id="footer">
			<div class="copyright">
				<span>Copyright &copy; <?PHP echo date('Y'); ?> Lytham Tyres & Exhausts, 13A Pleasant Street, Lytham St.Annes, Lancashire, FY8 5JA</span>
				<div class="telephone">Telephone (01253) 794671</div>
			</div>
			<a href="http://www.creationfactor.net/" target="_blank"><img src="images/creationfactor.net.jpg" alt="Designed by Creation Factor" title="Designed by Creation Factor"/></a>
			<div class="clearfloat"><!--fill--></div>
		</div>
		
	</div><!-- /container -->
</body>
</html>