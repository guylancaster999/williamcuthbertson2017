<?php
require "funcz/functionz.php";
	function newsItem( $ttl,$txt,$pic)
	{
		echo '<li><article>';
		photorightnolink($pic,$ttl);
		echo '<h4><b>'.$ttl.'</b></h4>'.$txt.'</article>
				<br/>
				<br class="brclear"/>
				<br class="brclear"/></li>';
		return;
	}
	print head("en","News","",",Thai, Juror, Competion, Judge");
 ?>
<body> 
<div class="container">
  <div class="row">	
    <div class="col-sm-2 col-md-2 col-lg-2" >  
			<?php 
			print menu("en","News",'news_e.php','news.php','news_ch.php');
			?>
	 </div>	  
      <div class="col-sm-10   col-md-10 col-lg-10">
		<?php print  shead1('News');?>        
	 		   <main>
             <div class="row">
               <div class="col-	12 col-sm-12 col-md-12  col-lg-12">
			<ul style="margin-left:-30px;">
 <?php
 
newsitem("Thailand 4th International Chopin Competition",
		"William Cuthbertson will be serving on the jury of the 
		<a href=\"http://www.dmmusic.org/The4thChopin.pdf\">Thailand 4th International Chopin Competition</a> in November 2017, Bangkok. 
		Other jurists include <a href=\"http://www.eliane-reyes.com\">Éliane Reyes</a> - Belgium + <a href=\"http://saorihaji.wixsite.com/pianomusic\">Saori Haji</a> - Japan.<br/>
		On Monday November 20th at 7pm, there will be a concert by the members of the jury at the Siam Ratchada Auditorium, Yamaha Ratchadapisek Music School, Bangkok, Thailand.
		<ul>
		<li>Eliane Reyes
		<ul><li>M.Ravel : Jeux d&apos;eau</li>
		<li>C.Debussy : L&apos;isle joyeuse</li>
		</ul>
		</li>
		<li>Saori Haji
		<ul>
		<li>C.Debussy : Reflets dans l&apos;eau</li>
		<li>F.Chopin : Waltz C# minor Op.64 No.2</li>
		<li>M.Ravel : Scarbo</li>
		</ul>
		</li>
		<li>William Cuthbertson
		<UL>
		<LI>F.Chopin : Barcarolle Op.60</LI>
		<LI>F.Chopin : F minor Ballade Op.52</li>
		</ul>
		</li>
		</ul>",
		  "thaichopincompetition_240.jpg" );

 newsitem("Gisela Sick Education Centre, Waldkirch",
			"Work is now completed on the the new building, whch will include the <a href=\"http://www.fv-musikschule-waldkirch.de\">Waldkirch Music School</a>. Click <a href=\"https://www.badische-zeitung.de/waldkirch/gisela-sick-bildungshaus-in-waldkirch-offiziell-eroeffnet\">here</a> for article (Badische Zeitung)",
            "musicschule_new_240.jpg");
			
	newsitem("Peter Feuchtwanger Symposium 2017",
			"On August 27th 2017, there was a symposium in Waldkirch with pianists who were students of Peter Feuchtwanger and others who were interested in his methods. It was organized by William Cuthbertson",
			"feuchtwangermeeting2017-1_240.jpg");
	
		newsitem( "Fantasy on the Gregorian chorale <em>Videns dominus...Lazare veni foras</em> for organ and piano",
			"At the suggestion of Heinz Vogel, the Catholic vicar of Waldkirch, William Cuthbertson has composed a piece for organ and piano for <a href=\"http://cuthbertson.de/concert_e.php\">the concert on 1st April 2017</a>: Fantasy on the Gregorian chorale &quot;Videns dominus...Lazare veni foras&quot;. Heinz Vogel will sing the chorale before the piece.",
			"ritter_240.jpg");

newsitem("Waldkirch Music School",
"Work in progress on the new building for the  <a href=\"http://www.fv-musikschule-waldkirch.de\">Waldkirch Music School</a>, a gift from <A href=\"https://www.sick.com/de/en\">Sick AG</a> and the Sick Foundation, where the   <a href=\"masterclasses_e.php\">2017 Piano Master Class</a> will take place in November 2017.",			
	"musicschule.jpg");

?>			
			  </ul>
					</div>
		</div>
				</main>
		<?php print foot();	?>	   
		 </div>
		  	</div>
			</div>	
 	<?php  print endPage();?>
</body>
</html>
