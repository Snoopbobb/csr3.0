<?php 
	error_reporting(0);

	//RSS Feeds
	$xml_broncos=simplexml_load_file('https://www.bing.com/news/search?q=denver+broncos&go=Submit&qs=n&form=QBNT&pq=denver+broncos&sc=8-13&sp=-1&sk=&ghc=1&format=RSS') or die("Error: Please try again later");

	$xml_rockies=simplexml_load_file('https://www.bing.com/news/search?q=colorado+rockies&go=Submit&qs=LC&form=QBNT&pq=colorado+&sc=8-9&sp=1&sk=&format=RSS') or die("Error: Please try again later");

	$xml_nuggets = simplexml_load_file('https://www.bing.com/news/search?q=denver+nuggets&go=Submit&qs=n&form=QBNT&pq=denver+nuggets&sc=8-14&sp=-1&sk=&ghc=1&format=RSS') or die("Error: Please try again later");

	$xml_avs = simplexml_load_file('https://www.bing.com/news/search?q=colorado+avalanche+nhl&go=Submit&qs=n&form=QBNT&pq=colorado+avalanche+nhl&sc=8-22&sp=-1&sk=&format=RSS') or die("Error: Please try again later");

	$xml_buffs = simplexml_load_file('https://www.bing.com/news/search?q=cu+buffs&go=Submit&qs=n&form=QBNT&pq=cu+buffs&sc=8-7&sp=-1&sk=&format=RSS') or die("Error: Please try again later");

	$xml_rams = simplexml_load_file('https://www.bing.com/news/search?q=csu+rams&go=Submit&qs=n&form=QBNT&pq=csu+rams&sc=8-6&sp=-1&sk=&format=RSS') or die("Error: Please try again later");

	$xml_falcons = simplexml_load_file('https://www.bing.com/news/search?q=air+force+falcons+sports+&go=Submit&qs=n&form=QBNT&pq=air+force+falcons+sports+&sc=2-25&sp=-1&sk=&format=RSS') or die("Error: Please try again later");

	$xml_rapids = simplexml_load_file('https://www.bing.com/news/search?q=colorado+rapids&go=Submit&qs=n&form=QBNT&pq=colorado+rapids+soccer&sc=8-13&sp=-1&sk=&ghc=1&format=RSS') or die("Error: Please try again later");

	$xml_collegiate = simplexml_load_file('https://www.bing.com/news/search?q=college+sports+colorado&go=Submit&qs=n&form=QBNT&pq=college+sports+colorado&sc=0-21&sp=-1&sk=&format=RSS') or die("Error: Please try again later");

	$xml_highschool = simplexml_load_file('http://chsaanow.com/feed/') or die("Error: Please try again later");

	$xml_general = simplexml_load_file('https://www.bing.com/news/search?q=colorado+sports&go=Submit&qs=n&form=QBNT&pq=colorado+sports&sc=8-15&sp=-1&sk=&format=RSS') or die ("Error: Please try again later");

	$xml_outdoors = simplexml_load_file('https://www.bing.com/news/search?q=colorado+parks+and+wildlife&go=Submit&qs=AS&form=QBNT&pq=colorado+park&sc=8-13&sp=1&sk=&ghc=1&format=RSS') or die ("Error: Please try again later");

	// Function to iterate over xml data pulling out the link and title to the article
	function newsTemplate ($xml) {
		for ($i=0; $i < 10; $i++) { 
			$title = $xml->channel->item[$i]->title;
			$link = $xml->channel->item[$i]->link;
			echo "<p><a href=\"$link\" target=\"_blank\">" . htmlentities($title) . "</a></p>";
		 }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="The latest in Colorado sports news, from the Denver Broncos, to Colorado high schools.">
	<meta name="summary" content="Get the latest news stories covering Colorado sports. Follow professional teams like the Denver Broncos, Denver Nuggets, Colorado Rockies, Colorado Avalanche. Read the latest on Colorado collegiate teams like the CU Buffs, CSU Rams, and Air Force Falcons. Follow Colorado high school news, and even hunting, fishing, and hiking news in Colorado.">
	<title>Colorado Sports Report</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
	<script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-46721230-4', 'auto');
	  ga('send', 'pageview');
  </script>
</head>
<body>
	<div class="hero">
		<h1>Colorado Sports Report</h1>
	</div>
	<aside>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- CSR responsive -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-5366675651040715"
		     data-ad-slot="4434098181"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</aside>
	<main>
		<a href="#broncos"><button class="button">Broncos News</button></a>
		<a href="#rockies"><button class="button">Rockies News</button></a>
		<a href="#nuggets"><button class="button">Nuggets News</button></a>
		<a href="#avs"><button class="button">Avalanche News</button></a>
		<a href="#buffs"><button class="button">Buffs News</button></a>
		<a href="#rams"><button class="button">Rams News</button></a>
		<a href="#falcons"><button class="button">Falcons News</button></a>
		<a href="#rapids"><button class="button">Rapids News</button></a>
		<a href="#college"><button class="button">Collegiate News</button></a>
		<a href="#highschool"><button class="button">High School News</button></a>
		<a href="#misc"><button class="button">Miscellaneous News</button></a>
		<a href="#outdoors"><button class="button">Outdoors News</button></a>
		<a href="#links"><button class="button">News Links</button></a>
		<div class="news-section broncos-news" id="broncos">
			<h1>Denver Broncos News</h1>
			<?php
				newsTemplate($xml_broncos);
			?>
		</div>
		<div class="news-section rockies-news" id="rockies">
			<h1>Colorado Rockies News</h1>
			<?php
				newsTemplate($xml_rockies);
			?>
		</div>
		<div class="news-section nuggets-news" id="nuggets">
			<h1>Denver Nuggets News</h1>
			<?php
				newsTemplate($xml_nuggets);
			?>
		</div>
		<div class="news-section avs-news" id="avs">
			<h1>Colorado Avalanche News</h1>
			<?php
				newsTemplate($xml_avs);
			?>
		</div>
		<div class="news-section buffs-news" id="buffs">
			<h1>CU Buffaloes News</h1>
			<?php
				newsTemplate($xml_buffs);
			?>
		</div>
		<div class="news-section rams-news" id="rams">
			<h1>CSU Rams News</h1>
			<?php
				newsTemplate($xml_rams);
			?>
		</div>
		<!-- <div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=denverbroncos&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=coloradorockies&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=denvernuggets&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=coloradoavs&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=cubuffs&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=csurams&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div> -->
		<aside>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- CSR responsive -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-5366675651040715"
			     data-ad-slot="4434098181"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</aside>
		<div class="news-section falcons-news" id="falcons">
			<h1>AF Falcons News</h1>
			<?php
				newsTemplate($xml_falcons);
			?>
		</div>
		<div class="news-section rapids-news" id="rapids">
			<h1>Colorado Rapids News</h1>
			<?php
				newsTemplate($xml_rapids);
			?>
		</div>
		<div class="news-section college-news" id="college">
			<h1>Colorado Collegiate News</h1>
			<?php
				newsTemplate($xml_collegiate);
			?>
		</div>
		<div class="news-section highschool-news" id="highschool">
			<h1>Colorado High School News</h1>
			<?php
				newsTemplate($xml_highschool);
			?>
		</div>
		<div class="news-section general-news" id="misc">
			<h1>Colorado Misc News</h1>
			<?php
				newsTemplate($xml_general);
			?>
		</div>
		<div class="news-section outdoors-news" id="outdoors">
			<h1>Colorado Outdoors News</h1>
			<?php
				newsTemplate($xml_outdoors);
			?>
		</div>
		<!-- <div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=hikecolorado&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=airforcefalcons&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div>
		<div class="pics">
			<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'>
				<iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&tags=coloradoscenery&thumbnails=0&transition=0&layoutType=responsive&sort=3' 
						scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' >
				</iframe>
			</div>
		</div> -->
		<aside>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- CSR responsive -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-5366675651040715"
			     data-ad-slot="4434098181"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</aside>
		<div class="links" id="links">
			<div class="links-left">
				<h3>Professional Teams</h3>
				<p><a href="http://www.denverbroncos.com/" target="_blank">Denver Broncos</a></p>
				<p><a href="http://colorado.rockies.mlb.com/index.jsp?c_id=col" target="_blank">Colorado Rockies</a></p>
				<p><a href="http://www.nba.com/nuggets/" target="_blank">Denver Nuggets</a></p>
				<p><a href="http://avalanche.nhl.com/" target="_blank">Colorado Avalanche</a></p>
				<p><a href="http://www.coloradorapids.com/" target="_blank">Colorado Rapids</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t551" target="_blank">Colorado Springs Sky Sox</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t342" target="_blank">Albuquerque Isotopes (Rockies AAA)</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t538" target="_blank">Hartford Yard Goats (Rockies AA)</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t515" target="_blank">Modesto Nuts (Rockies Adv A)</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t573" target="_blank">Asheville Tourists (Rockies A)</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t480" target="_blank">Boise Hawks (Rockies Short A)</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t4364" target="_blank">Grand Junction Rockies (Rockies Rookie)</a></p>
				<p><a href="http://www.milb.com/index.jsp?sid=t629" target="_blank">Dominican Summer League Rockies (Rockies Foreign Rookie)</a></p>
				<p><a href="http://www.coloradomammoth.com/" target="_blank">Colorado Mammoth</a></p>
				<p><a href="http://www.denveroutlaws.com/" target="_blank">Denver Outlaws</a></p>
				<p><a href="http://coloradoeagles.com/" target="_blank">Colorado Eagles</a></p>
				<p><a href="http://nfl.com/" target="_blank">NFL</a></p>
				<p><a href="http://mlb.com/" target="_blank">MLB</a></p>
				<p><a href="http://nba.com/" target="_blank">NBA</a></p>
				<p><a href="http://nhl.com/" target="_blank">NHL</a></p>
				<p><a href="http://www.mlssoccer.com/" target="_blank">MLS</a></p>
				<p><a href="http://www.milb.com/index.jsp" target="_blank">Minor League Baseball</a></p>
				<h3>National Coverage</h3>
				<p><a href="http://sports.yahoo.com/" target="_blank">Yahoo! Sports</a></p>
				<p><a href="http://www.cbssports.com/" target="_blank">CBS Sports</a></p>
				<p><a href="http://msn.foxsports.com/" target="_blank">Fox Sports</a></p>
				<p><a href="http://www.nbcsports.com/" target="_blank">NBC Sports</a></p>
				<p><a href="http://bleacherreport.com/" target="_blank">Bleacher Report</a></p>
				<p><a href="http://deadspin.com/" target="_blank">Deadspin</a></p>
				<p><a href="http://www.sportsgrid.com/" target="_blank">Sports Grid</a></p>
				<p><a href="http://www.thebiglead.com/" target="_blank">The Big Lead</a></p>
				<p><a href="http://www.awfulannouncing.com/" target="_blank">Awful Announcing</a></p>
				<p><a href="http://www.sbnation.com/" target="_blank">SB Nation</a></p>
			</div>
			<div class="links-center">
				<h3>Colorado Collegiate Teams</h3>
				<p><a href="http://www.goairforcefalcons.com/" target="_blank">Air Force Falcons</a></p>
				<p><a href="http://www.cubuffs.com/" target="_blank">Colorado Buffaloes</a></p>
				<p><a href="http://www.csurams.com/" target="_blank">Colorado State Rams</a></p>
				<p><a href="http://www.denverpioneers.com/" target="_blank">Denver Pioneers</a></p>
				<p><a href="http://cctigers.com/" target="_blank">Colorado College Tigers</a></p>
				<p><a href="http://www.uncbears.com/" target="_blank">University of Northern Colorado Bears</a></p>
				<p><a href="http://www.asugrizzlies.com/" target="_blank">Adams State Grizzlies</a></p>
				<p><a href="http://gomountainlions.com/" target="_blank">UCCS Mountain Lions</a></p>
				<p><a href="http://www.ccucougars.com/" target="_blank">Colorado Christian Cougars</a></p>
				<p><a href="http://www.cmumavericks.com/" target="_blank">Colorado Mesa University Mavs</a></p>
				<p><a href="http://www.csmorediggers.com/" target="_blank">Colorado School of Mines Orediggers</a></p>
				<p><a href="http://www.gothunderwolves.com/" target="_blank">CSU Pueblo ThunderWolves</a></p>
				<p><a href="http://www.goskyhawks.com/" target="_blank">Fort Lewis College SkyHawks</a></p>
				<p><a href="http://gometrostate.com/" target="_blank">Metro State RoadRunners</a></p>
				<p><a href="http://www.regisrangers.com/" target="_blank">Regis University Rangers</a></p>
				<p><a href="http://www.western.edu/athletics" target="_blank">Western State Colorado University Mountaineers</a></p>
				<p><a href="http://denver.jwuathletics.com/" target="_blank">Johnson and Wales University WildCats</a></p>
				<p><a href="http://athletics.cncc.edu/" target="_blank">Colorado Northwestern Community College Spartans</a></p>
				<p><a href="http://www.lamarcc.edu/athletics/" target="_blank">Lamar Community College Runnin' Lopes</a></p>
				<p><a href="http://www.njc.edu/Athletics" target="_blank">Northeastern Junior College Plainsman</a></p>
				<p><a href="http://www.ojc.edu/athletics/" target="_blank">Otero Junior College Rattlers</a></p>
				<p><a href="http://sports.trinidadstate.edu/" target="_blank">Trinidad State Junior College Trojans</a></p>
				<h3>Colorado High School Sports</h3>
				<p><a href="http://www.maxpreps.com/state/colorado.htm" target="_blank">Max Preps Colorado</a></p>
				<p><a href="http://www.denverpost.com/preps" target="_blank">Denver Post Preps</a></p>
				<p><a href="http://coloradoprepreport.rivals.com/" target="_blank">Colorado Prep Report</a></p>
				<p><a href="http://chsaanow.com/" target="_blank">Colorado High School Sports Association</a></p>
			</div>
			<div class="links-right">
				<h3>Colorado Newspapers</h3>
				<p><a href="http://www.denverpost.com/sports?source=Nav_Sports" target="_blank">Denver Post</a></p>
				<p><a href="http://gazette.com/sports" target="_blank">Colorado Springs Gazette</a></p>
				<p><a href="http://www.dailycamera.com/sports" target="_blank">Boulder Daily Camera</a></p>
				<p><a href="http://www.chieftain.com/sports/" target="_blank">Pueblo Chieftain</a></p>
				<p><a href="http://www.gjsentinel.com/sports/" target="_blank">Grand Junction Daily Sentinel</a></p>
				<p><a href="http://www.timescall.com/sports" target="_blank">Longmont Times-Call</a></p>
				<p><a href="http://www.coloradoan.com/sports/" target="_blank">Fort Collins Coloradoan</a></p>
				<p><a href="http://www.reporterherald.com/sports" target="_blank">Loveland Reporter-Herald</a></p>
				<p><a href="http://durangoherald.com/section/Sports/" target="_blank">Durango Herald</a></p>
				<p><a href="http://www.canoncitydailyrecord.com/canoncity-sports" target="_blank">Canyon City Daily Record</a></p>
				<p><a href="http://www.greeleytribune.com/Sports/" target="_blank">Greeley Tribune</a></p>
				<p><a href="http://www.montrosepress.com/sports/" target="_blank">Montrose Daily Press</a></p>
				<h3>Colorado Sports Radio</h3>
				<p><a href="http://www.1043thefan.com/" target="_blank">Denver The Fan 104.3</a></p>
				<p><a href="http://www.denverssportsstation.com/" target="_blank">Denver ESPN 105.5</a></p>
				<p><a href="http://www.1600thezone.com/" target="_blank">Denver The Zone 1600</a></p>
				<p><a href="http://milehighsports.com/" target="_blank">Mile High Sports 94.1</a></p>
				<p><a href="http://www.850koa.com/main.html" target="_blank">Denver KOA 850</a></p>
				<h3>Colorado Sports Blogs/News Sites</h3>
				<p><a href="http://www.milehighreport.com/" target="_blank">Mile High Report (Broncos)</a></p>
				<p><a href="http://www.denverstiffs.com/" target="_blank">Denver Stiffs (Nuggets)</a></p>
				<p><a href="http://www.purplerow.com/" target="_blank">The Purple Row (Rockies)</a></p>
				<p><a href="http://roxpile.com/" target="_blank">The Rox Pile (Rockies)</a></p>
				<p><a href="http://www.milehighhockey.com/" target="_blank">Mile High Hockey (Avs)</a></p>
				<p><a href="http://www.ralphiereport.com/" target="_blank">Ralphie Report (Buffs)</a></p>
				<p><a href="http://www.ramnation.com/home" target="_blank">Ram Nation (Rams)</a></p>
				<p><a href="http://www.southstandsdenver.com/" target="_blank">South Stands Denver (General)</a></p>
				<p><a href="http://www.roundballminingcompany.com/" target="_blank">Roundball Mining Company (Nuggets)</a></p>
				<h3>Colorado Sports Television</h3>
				<p><a href="http://rockymountain.rootsports.com/" target="_blank">Root Sports Rocky Mountain</a></p>
				<p><a href="http://www.altitude.tv/" target="_blank">Altitude Sports</a></p>
			</div>
		</div>			
	</main>
	<footer>
		<h2>&copy;<?php echo date('Y'); ?> Colorado Sports Report | Powered By <a href="http://snoopbobb.com" target="_blank">Snoopbobb</a></h2>
	</footer>
	<script src="js/main.js"></script>
</body>
</html>

