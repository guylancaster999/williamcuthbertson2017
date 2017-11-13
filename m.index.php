<?php 
	require "funcz/m.functionz.php";
    print head("de","homepage","index.php","Y");
	require "ghome.php";
	$x 		= json_decode($home,true);
	$sz		= count($x["home"]);     
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone">
  <div data-role="header">
    <?php print top("de","Homepage","Homepage"); ?>
</div>
  <div data-role="main" class="ui-content" >
            <?php photocenter("m.frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
			
	 		<ul> 
			<li>
				<h4><b>2017 Konzertprogramm</b></h4>
				Click  <a href ="program.php"><b>hier</b></a> f&uuml;r weitere Details.
				<br/><br/>
			</li>
			<li>
				<h4><b>Klavier Konzert</b></h4>
				Mitwoch 1. November 2017, 19.00Uhr
				<ul>
				<li><a href="http://www.ekaterine.de" target="_blank">Ekaterine Khvedelidze</a>
				<ul>
				<li>César Franck, Zhukov Prélude, Fugue et Variation Op.18</li>
				<li>Alexander Skrjabin, 12 Préludes Op.11 </li>
				<li>Frédéric Chopin, 12 Préludes Op.28</li></ul>
				</li>
				</ul>				
				Waldkircher Orgelstiftung, Orgelbauersaal,Gewerbekanal 1, 79183 Waldkirch, Baden-Württemberg. (Um Spenden wird erbeten)
				<br/><br/>
				</li>
				<li>
				<h4><b><a href="masterclasses.php">Klavier Meisterkurs</a> Abschlusskonzert  der Kursteilnehmern</b></h4>
				Samstag 4.November 2017, 19.00Uhr 
				<ul>
				<li>Rosmarie Schmidt
					<ul>
					<li>W.A.Mozart, Sonate C-Dur K.279 Erster Satz, Allegro</li>
					</ul>
				</li>
		<li>Agnes Joshi-Meili
			<ul>
				<li>J.Brahms, Intermezzo a-Moll,Op.76 Nr.7</li>
				<li>Genari Karganoff, Op.10 Nr.1 Souvenir, Op.10 Nr.2 Petite Valse</li>
				</ul>
		</li>
		<li>Christian Loeschke
			<ul>
			<li>J.Brahms, Intermezzo Es-Dur Op.117 Nr.1, Intermezzo b-Moll Op.117 Nr.2</li>
			</ul>
		</li>

		<li>Saeko Saito
			<ul>
			<li>R:Schumann, Scherzo Op.32 Nr.1</li>
			<li>F.Chopin, Etude Ges Dur Op.10 Nr.5</li>
			</ul>
		</li>

		<li>Robbert van Steijn
			<ul>
			<li>F.Liszt, Sonnetto di Petrarca 104</li>
			<li>F.Chopin, Ballade F-Moll Op.52</li>
			</ul>
		</li>
		</ul>
		<a href="https://www.tourismus-bw.de/Media/Attraktionen/Orgelbauersaal-der-Waldkircher-Orgelstiftung"  target="_blank">Waldkircher Orgelstiftung</a>, Orgelbauersaal,Gewerbekanal 1, 79183 Waldkirch, Baden-Württemberg (Um Spenden wird erbeten)
				<br/><br/>
		</li>
				<li>
				<h4><b>Internationaler Chopin Klavier Wettbewerb Konzert</b></h4>
				Montag 20. November 2017, 19.00Uhr
				<ul>
				<li>William Cuthbertson 
					<uL>
					<LI>F.Chopin,  Barcarolle Op.60</LI>
					<LI>F.Chopin, Ballade Op.52</li>
					</ul>
				</li>
				<li>Eliane Reyes 
					<ul>
					<li>M.Ravel, Jeux d&apos;eau</li>
					<li> C.Debussy, L&apos;isle joyeuse</li>
					</ul>
				</li>
				<li>Saori Haji
					<ul>
					<li>C.Debussy, Reflets dans l&apos;eau</li>
					<li>F.Chopin, Waltz Op.64 No.2</li>
					<li>M.Ravel, Scarbo</li>
					</ul>
				</li>
				</ul>
				Siam Ratchada Auditorium,Yamaha Ratchadapisek Music School,Bangkok,Thailand
				</li>
				</ul> 
	   </div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>