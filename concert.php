<?php 
require "funcz/functionz.php";
print head("de","Konzerte");
function rwYr($yr)
{
	return '<div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 box">'.$yr.'</div>
		  </div>';
}
function rwEv($dt,$ttl,$ev,$photo="",$photottl="",$photolink="")
{
	$ret='<article>
			<div class="row">
              <div class="col-lg-2 col-md-2 col-sm-3 boldTxt">'.$dt.'</div>
			  <div class="col-lg-6 col-md-6 col-sm-6">
			  	<h4><b>'.$ttl.'</b></h4>'.$ev;
	$ret.='</div>';
			if (strlen($photo)>0)
			 {
				$ret.='<div class="col-lg-3 col-md-3 col-sm-3">';
				 if (strlen($photolink)>0)$ret.=dophotorightlinked($photo,$photottl,$photolink);
				 else $ret.=dophotorightnolink($photo,$photottl);
				$ret.='</div>';
				}
	$ret.='</div>
		</article>';
		
		 $ret.='<div class="row rowgp">
			  <div class="col-md-2">&nbsp;</div>
			 </div>';
	return $ret;
}			
?>
<body>
 <div class="container">
  <div class="row">
    <div  <?php mnuClass();?>>  
			<?php print menu("de","Konzerte","concert_e.php","concert.php","concert_ch.php");?>
	</div>	  
      <div <?php mainClass();?>>
		<?php print shead1("Konzerte");?>       
    	<main>
				<?php print rwYr('2017');?>	
			<?php print rwEv("Freitag 10. Marz<br/>15.00 Uhr",
					"Konzert",
					 '<a href="https://www.derburgerspittel.ch/angebot/der-burgerspittel-im-viererfeld">Der Burgerspittel im Viererfeld</a>, Bern, Switzerland. 
					 Eintritt frei.  
					<ul>
					<li>Johann Sebastian Bach, <i>Partita C-Moll</i></li>
					<li>Franz Schubert,  <i>Sonate A-Dur</i></li>
					<li>Maurice Ravel,  <i>Pavane pur une infante défunte, Valses nobles et sentimentales</i></li>
					</ul>',
					"burg_240.jpg","Burgerspittel im Viererfeld");	 
			print rwEv("Samstag 1. April<br/>19.30 Uhr", 
				    'Konzert mit William Cuthbertson und Stephan Ronkov (Orgel)',
					'<ul>
						<li>F.Liszt <i>Fantasie und Fuge über den Choral &quot;Ad nos, ad salutem undam&quot;</i> für Orgel</li>
						<li>F.Liszt <i>Sonate H-Moll für Klavier</i> </li>
					<li>W. Cuthbertson: Ein Stück für Klavier und Orgel</li>
					</ul> Spenden werden  erbeten.
					<a href="http://www.ksew.de/cms/website.php?id=/w/index.htm">Kirche St.Margarethen</a>, Waldkirch',
					"stMargarethenWaldkirch_240.jpg",
					"Kirche St.Margarethen");
				print rwEv("Freitag, 28.April 19.30 Uhr",
							"Genussreise in der Zeit des Sturm und Drang und der Weimarer Klassik",
							'Ohrenschmaus:Peter M.Ritter und William Cuthbertson - 
							Peter M. Ritter rezitiert bekannte und beliebte Texte und Gedichten von Johann Wolfgang von Goethe, und William Cuthbertson spielt  Grande Sonate pathetique Op.13  von Ludwig van Beethoven.
							<br/>
							<a href="http://www.albert-woehrle.de/">Albert Wöhrle Bio-Partyservice und Bio-Catering</a>
							Simonswälderstr.50,79261 Gutach-Bleibach, 38 Euro (Getränke separat) , Kulturprogramm und biologisches Drei-Gänge- Menü (vegetarisch und Fleisch)<br/>
							Anmeldung : telefonisch, 07685 913410 , oder per Email, <a href="mailto:info@albert-woehrle.de">info@albert-woehrle.de</a>',
							"ritter_240.jpg","Peter M. Ritter");
				print rwEv('Sontag 9. Juli <br/>11.00 Uhr',
			            'Klavier Matinée',
					'<ul>
				   <li> Johann Sebastian Bach&nbsp;<i>Partita C-Moll</i> BWV 826</li>
				   <li>Franz Schubert, <i>Sonate A-Dur</i> D 664</li>	 
					<li>Maurice Ravel, <i>Pavane pur une infante défunte, Valses nobles et sentimentales,  Albordo del Gracioso.</i></li>
				 </ul>
				 15&euro;, 13&euro; ermäßigt, 7&euro; Kinder bis 16 Jahren 
			  <a href="http://p23515.typo3server.info/29.0.html">Elztalmuseum</a>, Waldkirch.',
	          "etzal_240.jpg","Etzal Museum");
			  print rwEv('Samstag 9.<br/>Sonntag 10. September<br/>17.00 Uhr',
			        'Konzert im <a href="http://www.elfenaupark.ch/">Elfenau Park</a>',
				  'Bern, Schweiz.
				<ul>
					<li>J.S.Bach, <i>Goldberg Variationen</i></li>
				</ul>',
				"elfenau.jpg","Elfenau Park");
			print rwEv('27.September Bad Krozingen<br/>
			28.September Lörrach<br/>
			6.Oktober  Freiburg<br/>
			7.Oktober Schopfheim<br/>
			20.Oktober Bad Säckingen<br/>
			9.November Schopfheim<br/>
			9.Dezember Emmendingen',
				'Konzertreihe für Senioren und Kranken mit Ivetta Viatet (Russland), Violin',
				'<ul><li>Wolfgang Mozart, Sonate G-Dur KV379</li>
				<li>Pietro Antonio Fiocco, Allegro</li>
				<li>Igor Stravinski, Russisches Mädchenlied</li>
				<li>Bohuslav Martinu, 3 Arabesken</li>
				<li>Edward Elgar, Salut d\'amour Op.12</li>
				<li>Henryk Wieniawski, Polonaise A-Dur Op.43</li>
				<li>Pablo Sarasate, Introduktion und Tarantella</li>
				</ul>',
				'2017violinpiano_240.JPG',
				'Konzertreihe für Senioren und Kranken mit Ivetta Viatet (Russland), Violin' );
				
			 	print rwEv('Sontag 8. Oktober<br/>17.00 Uhr',
						'J.S.Bach, <i>Goldberg Variationen</i>',' 
						<a href="http://www.gutshof-guentert.de/">Gutshof Güntert</a>,Schloßgasse 4, 
						79295 Sulzburg-Laufen, Markgräflerland, Baden-Württemberg.
							Karten ab 20&euro; - <a href="https://www.reservix.de/tickets-bach-goldberg-variationen-william-cuthbertson-klavier-in-sulzburg-gutshof-guentert-am-8-10-2017/e1077188">hier</a> kaufen.',
						"gusthof.jpg","Gutshof Güntert");      
			  print rwEv('Montag 30. Oktober&ndash;<br/> Samstag 4. November',
			   '<a href="meisterkurse.php">Peter Feuchtwanger Klavier Meisterklasse</a>',
			   'Details <a href="meisterkurse.php">hier</a>.',
			   "Peter_Feuchtwanger_250.jpg","Peter  Feuchtwanger:photo Stefan Blido, Wertheim");
			 print rwEv("Mitwoch 1. November<br/> 19.00 Uhr",
						"Klavier Konzert",
						'Mit <a href="http://www.ekaterine.de">Ekaterine Khvedelidze</a>
					<ul>
<li>César Franck/Zhukov Prélude, Fugue et Variation op. 18</li>
<li>Alexander Skrjabin: 12 Préludes, op. 11 </li>
<li>Frédéric Chopin: 12 Préludes, op. 28</li>
</ul>

					Orgelbauersaal, Orgelstiftung, Gewerbekanal 1, Waldkirch, Baden-Württemberg. 
					 Um Spenden wird erbeten',
					  "EkaterineKhvedelidze_240.jpg",
					  "Ekaterine Khvedelidze",
					  "http://www.ekaterine.de"); 
 		 		 print rwEv("Samstag 4. November<br/> 19.00 Uhr",
						"<a href=\"masterclasses_e.php\">Klavier  Meisterkurs</a>  Abschlusskonzert der Kursteilnehmern",
						'<ul>
						<li>Rosmarie Schmidt<ul><li>W.A.Mozart,Sonate C-Dur K.279 Erster Satz , Allegro</li></ul></li>
						<li>Agnes Joshi-Meili<ul><li>J.Brahms, Intermezzo a-Moll,Op.76 Nr.7</li></ul></li>
						<li>Christian Loeschke<ul><li>J.Brahms, Intermezzo Es-Dur Op.117 Nr.1 Intermezzo b-Moll  Op.117 Nr.2</li></ul></li>
						<li>Agnes Joshi-Meili<ul><li>Genari Karganoff Op.10 Nr.1  Souvenir OP.10 Nr.2  Petite Valse</li></ul></li>
						<li>Saeko Saito<ul><li>R:Schumann,Scherzo Op.32 Nr.1</li><li>F.Chopin Étude Ges Dur Op.10 Nr.5</li></ul></li>
						<li>Robbert van Steijn<ul><li>F.Liszt ,Sonnetto di Petrarca 104</li><li>F.Chopin,Ballade f-Moll Op.52</li></ul></li>
						</ul>
						Orgelbauersaal, Orgelstiftung, Gewerbekanal 1, Waldkirch, Baden-Württemberg. Um Spenden wird erbeten. ',
					  "2017mcp2_240.jpg",
					  "Participants Closing Concert",
					  "http://www.waldkircher-orgelstiftung.de/"); 
	 							
			    print rwEv("Montag 20. November<br/>19.00 Uhr",
				"Internationaler Chopin Klavier Wettbewerb : Konzert",
				"<ul>
				<li>William Cuthbertson
					<UL>
					<LI>F.Chopin : Barcarolle Op.60</LI>
					 <LI>F.Chopin : Ballade Op.52</li>
					 </ul>
			 </li> 
			 <li>Saori Haji
				<ul>
					<li>C.Debussy : Reflets dans l’eau</li>
					<li>F.Chopin : Waltz Op.64 Nr.2</li>
					<li>M.Ravel : Scarbo</li>
					</ul>
				</li>
				 
			<li>Eliane Reyes 
				<ul>
				<li>M.Ravel : Jeux d’eau</li>
				<li>C.Debussy : L’isle joyeuse</li>
				</ul>
			</li>
			</ul> 
			Siam Ratchada Auditorium, Yamaha Ratchadapisek Music School, Bangkok, Thailand.
			(600 baht, 300baht f&uuml;r Studenten)",
			"thaichopincompetition_240.jpg");					  
			 print rwYr('2016');
 			 print rwEv('Freitag 11. März',
			           'Konzert im <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>',
			          'Kanderner Strasse 18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg.
			<ul>
				<li>F.Schubert <i>Impromptu Ges-Dur, Op.90 Nr.3, Impromptu B-Dur</i> Op.142 Nr.3</li>
				<li>A.Skrjabin <i>Sonate Nr.2  Op.19</i></li>
				<li>F.Chopin <i>Sonate Nr.2 B-Moll Op.35</i></li>
			</ul>',
			"sonneneck_240.jpg","Haus Sonneneck"); 
		  print rwEv('Sonntag 20. März<br/>15.00 Uhr',
				  'Konzert im <a href="http://www.stbeatus.ch/">Stiftung Beatus</a> Bühlweg 2, 3655 Sigriswil, Schweiz.', 
				  '<ul>
					<li>A.Skrjabin <i>Sonate Nr.2  Op.19</i></li>
					<li>S.Rachmaninow <i>Prelude D-Dur Op.23 Nr.4</i></li>
					<li>F.Schubert <i>Impromptu Ges-Dur Op.90 Nr.3</i></li>
					<li>F.Chopin <i>Sonate Nr.2 B-Moll Op. 35 </i></li>
				</ul>',
				"stbeatus.jpg" ,"Stiftung St.Beatus" );
				print rwEv('Mittwoch 25. Mai<br/>18.00 Uhr',
		                 'Konzert im <a href="http://balamus.ru">Balakhna Museum für Geschichte und Kunst</a>',
			              'Nischni Nowgorod, Russland. 
			<ul>
				<li>F.Chopin   <i>Sonata Nr.2 in B flat minor</i>	Op. 35</li>
				<li>S.Rachmaninoff	<i>Polka de W.R.</i></li>	
				<li>F.Schubert  <i>Impromptu Ges-Dur Op.90 Nr.3, Impromptu B-Dur Op.142 Nr.3</i></li>
				<li>A.Skrjabin <i>Sonata No.2	Op.19</i> </li>
			</ul>',
            "russiaconcert_240.jpg","Balakhna Museum für Geschichte und Kunst");
			print rwEv('Sonntag 3. Juli<br/>11.00 Uhr',
			'Konzert im <a href="http://www.elztalmuseum.de/">Elztal Museum</a>,Kirchplatz 14, D-79183 Waldkirch.',
			'<ul>
				<li>L.van Beethoven, <i>Sonate Es-Dur Op.31 Nr.3</i></li>
				<li>F.Chopin,3 Mazurken Op.59</li>
				<li>R.Schumann, Études Symphoniques Op.13</li>
			</ul>', "etzal_240.jpg","Etzal Museum");
			print rwEv('Sonntag 10. Juli<br/>11.00 Uhr',
		      'Duo-Konzert Klavier und Violine',
			  'Im <a href="http://www.friedrich-husemann-klinik.de/"><b>Friedrich-Husemann Klinik</b></a>,
			Friedrich-Husemann-Weg 8, 79256 Buchenbach bei Freiburg.
			<br/>
			Mit William Cuthbertson—Klavier, Carina Kaltenbach-Schonhardt-Violine.
			<ul>
			<li>L.van Beethoven, <i> 1. Satz  Sonate für Violine und Klavier Nr. 5  F-Dur, Op. 24</i></li>
			<li>F.Schubert, <i> Impromptu Ges-Dur Op.90 Nr.3   (nur Klavier)</i></li>
			<li>Cesar Franck, <i> Sonate für Violine und Klavier A-Dur</i></li>
			<li>Antonin Dvorak, <i> Humoresque</i> </li>
			<li>William Cuthbertson,<i>  Butterfly Bounce Nr.1</i></li>
			<li>Fritz Kreisler <i> Schön Rosmarin</i></li>
			</ul>',
			"duo.jpg","William Cuthbertson, Carina Kaltenbach");
			print rwEv('Sonntag 10. Juli<br/>11.00 Uhr<br/>
			Mittwoch<br/>August 31st <br/>17.30 Uhr',
					'Ein Gedenkkonzert für Peter Feuchtwanger - Teil 1',
					' G.Rossinis &quot;Semiramide&quot; Overture, arr. Czerny, für 16 Pianisten auf 8 Klaviere	Eintritt free. 
			  Dieser Konzertteil findet im Flügelsaal, <A href="http://www.lepthien.de/">Pianohaus Lepthien</a> statt (‪Schwarzwaldstraße 9A, 79117 Freiburg im Breisgau‬). 
				Für alle Besucher, die beide Veranstaltungen besuchen möchten, wird ein direkter Bustransfer angeboten (von Freiburg nach Waldkirch und zurück, für jeweils ca. 6€). 
				Voranmeldung dafür bitte per Email an: 
				<a href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.',
				 "pianos.png","Pianos");
			print rwEv(' Mittwoch 31. August<br/>19.30 Uhr',
	                   'Ein Gedenkkonzert für Peter Feuchtwanger - Teil 2',
			'Es spielen eh em alige Studenten von Peter Feuchtwanger. 
		<ul>
			<li>Joseph Haydn, <i> Adagio F-Dur Hob. XII/9</i>  - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li> 
			<li>Franz Xaver Mozart, <i> Andantino A-Dur FXWM:41</i>  - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li>
			<li>Joseph Haydn, <i> Sauschneidercappriccio</i>  - Robert Bärwald </li>
			<li>Peter Feuchtwanger, <i> Variationen</i>  &ndash; Lennart Speer</li>
			<li>Franz Schubert, <i> Walzer D 779 Nr.1 (1823), Nr.2 Ländler D 366 Nr.3,4</i>  - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&album=Konzerte:2016&photoPtr=10&fromUrl=foto.php">Agnes Joshi</a></li>
			<li>Jean Sibelius, Die Tanne Op.75 Nr.5  - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&album=Konzerte:2016&photoPtr=10&fromUrl=foto.php">Agnes Joshi</a></LI>
			<LI>Peter Feuchtwanger, Tariqa Nr.2 - <a href="https://www.youtube.com/watch?v=-OONZvd7X6k">Christian Löschke</a></LI>
			<LI>J.S. Bach, Andante aus dem Klavierkonzert in f-Moll BWV 1056 -  Daniel Kasparian </LI>
			<li>Friedrich Kuhlau, Rondo C-Dur über Motive aus Mozart\'s "Don Giovanni" - Daniel Kasparian </li>
			<li>Peter Feuchtwanger, Study in the Eastern Idiom  Op.3 (Macedonian and Bosnian)- <a href="http://www.masako-kamikawa.com/">Masako Kamikawa</a>.</li>
			<li>Elisabeth Jaquet de La Guerre Prelude-Allemande-Menuet-Gavotte aus der Suite A-Moll - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=13&fromUrl=foto.php">Anna Roth </a></LI>
			<LI>Felix Mendelssohn Bartholdy Fantasie fis-Moll Op.28 Con motto Agitato, Allegro con Moto, Presto - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=14&fromUrl=foto.php&copy=">Manfred Seewann</a></li>
			<LI>Ina Birk, Soniyage - <a href="http://www.ina-birk-klavier.de/">Ina Birk</a></LI>
			<LI>Giacinto Scelsi, Rotativa - <A href="https://en.wikipedia.org/wiki/Marianne_Schroeder">Marianne Schroeder </a>.</LI>
			<LI>Frederik Chopin, Nocturne cis-Moll, Op.post - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=17&fromUrl=foto.php&copy=">Nina Attorf</a> </LI>
			<LI>Louis Moreau Gottschalk, La Gallina Op.53, Ojos Criollos, Dance Cubaine	Op.37 - <a href="http://www.blido.de/">Stefan und Fedra Blido</a> </LI>
			<li>Serge Bortkiewicz, Etüde Des-dur Op. 15, Nr. 8 - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=19&fromUrl=foto.php">Klaus Cutik</a></li>
			<LI>Franz Liszt, Freudvoll und Leidvoll - <a href="http://www.mezzo-soprano-sophia-grech.co.uk/">Sophia Grech</a>, mezzosoprano und <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic</a>, Klavier </LI>
			<LI>Benjamin Vanden Heuvel, Aus 4 Short Piano Pieces Nr.3,4 Dirge and American Suite, mit eigener Improvisation - <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic </a></LI>
			<LI>César Cui, "Causerie" - William Cuthbertson</LI>
			<LI>Franz Liszt, Consolation Nr.3 in Des Dur - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<LI>L. M. Gottschalk, Souvenirs d\'Andalousie - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<li>Franz Schubert, Polonaisen D599 Nr. 1,2 - <a href="https://de.wikipedia.org/wiki/Paul_Cibis">Paul Cibis</a> und <a href="https://de.wikipedia.org/wiki/Sophie-Mayuko_Vetter">Mayuko Vetter</a>  </li> 
    		<LI>Manuel de Falla, Feuertanz aus Der Liebeszauber - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Shura Cherkassky, Prelude Pathétique  - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Ludwig van Beethoven, 6 Bagatellen Op.126, Nr.1,2,3 - <a href="https://de.wikipedia.org/wiki/Jean-Jacques_D%C3%BCnki">Jean Jaques Dünki</a></LI>
		 	<LI>Robert Schumann, Des Abends - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>Adolph von Henselt, Wiegenlied  - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>Franz Schubert, arr. Leopold Godowsky, Wiegenlied - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>David Saperton, Zephyr - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			</ul>		
			Eintritt: 12&euro; / 10&euro; ermässigt / 9&euro; Kinder.	
			Barocksaal des Elztalmuseums in Waldkirch.',
    		"Peter_Feuchtwanger_250.jpg","Peter_Feuchtwanger");
			   print rwYr('2015');
			print rwEv('13. März<br/>20.30 Uhr',
			'<a href="http://www.klappe11.de/">Klappe11</a>:CHARLEY CHASE / LIMOUSINE LOVE -  
			Am Piano: William Cuthbertson',
     		'Die Kurzfilme: Limousine Love Einer der besten Kurz-Stummfilme überhaupt mit Charley Chase in der Hauptrolle! Chase war kein einfacher Slapstick-Komiker, sondern prägte eine Form der Situationskomödie, in der er meist als ein schüchterner, nervöser Durchschnittsbürger oder als jugendlicher Draufgänger auftrat. So ist auch LIMOUSINE LOVE umwerfend komisch: Chase muss auf der Fahrt zu seiner eigenen Hochzeit plötzlich entdecken, dass sich auf dem Rücksitz seines Autos eine nackte, wildfremde Frau befindet ... 
				<br/>
				Weitere Kurzfilme: Ballett ist ausgefallen, Hochbetrieb, Goal, Die Fahrt seines lebens... 
				<br/>
				Eintritt: &euro;5.50. Am Kommunales Kino, Fabrikstrasse 16, 79183 Waldkirch ',
				"klappe11.jpg" ,"Klappe11 Festival","http://www.klappe11.de"); 
			print rwEv('Samstag 28.<br/>Sontag 29.<br/> März<br/>17.00 Uhr',
			"Konzert",
			'<ul>
						 <li>Beethoven, Sonate Es-Dur &quot;Les Adieux&quot; Op.81a</li>
						 <li>Chopin, Tarantella As-Dur Op.43</li>
						 <li>Granados, Das Mädchen und die Nachtigall (aus Goyescas)</li>
						 <li>Glinka, bearb.von M.Balakirew &quot;Die Lerche&quot;</li>
						 <li>F.Liszt, Verdi Rigoletto Paraphrase</li>
						 <li>A.Skrjabin, Poème Fis-Dur Op.32 Nr.1, Sonate Nr.4 Op.30</li>
					</ul>
					  Konzertsaal Wohnark Elfenau, Elfenauweg 68, 3006 Bern, Schweiz. 
					<br/>
					Eintritt frei, Spenden erbeten.',"","","");
				  print rwEv('Sontag 19. April<br/>11.00 Uhr',
						"Konzert",
						'<ul>
							<li>Chopin 24 Preludes Op.28</li>
							<li>Skrjabin 24 Preludes Op.11</li>
						</ul>
						Orgelbauersaal, Gewerbekanal 1, Waldkirch Baden-Württemberg, Deutschland',
						"orgelbauersaal_240.jpg","orgelbauersaal",
						"http://bz-ticket.de/orgelbauersaal-waldkirch-waldkirch"); 
					print rwEv('Sontag 19. September<br/>19.30 Uhr',
						'Benefizkonzert zugunsten des Umbaus des Gemeindezentrums',
						'Mit:
						<ul>
						<li>William Cuthbertson (Klavier)</li>
						<li>Heinz Vogel (Klavier)</li>
						<li>Carina Kaltenbach-Schonhardt (Violine)</li>
						<li>Nicole Friedrich (Violine)</li>
						<li>Katharina Weeber (Viola)</li>
						<li>Carolina Berghorn (Violoncello) </li>
						<li>Michael Bornhak (Kontrabass ) </li>
						<li>Frauke Hoffmann (Mezzosopran)</li>
						<li>Fritz Schätzle (Bariton)</li>
						<li>Ursula Disch (Akkordeon, Französische Chansons)</li> 
						</ul>
						Katholisches Gemeindezentrum Waldkirch, Kirchplatz.
						Eintritt frei, Spenden willkommen zu heissen.', 
						"KatholischesGemeindezentrumWaldkirch_240.jpg","Katholisches Gemeindezentrum Waldkirch"); 
						print rwEv('Montag 5. Oktober<br/>20.00 Uhr',
						'Konzert',
						'Katholisches Gemeindezentrum Waldkirch, Kirchplatz 7.
						<ul>
						<li>Am Klavier: William Cuthberson, Waldkirch; </li>
						<li>Einführung: Dr. Ulrich Ruh, Journalist aus Elzach.</li>
						<li> Musik: u.A. Sonate Nr.5 und 6.</li>
						</ul>Eintritt 3&euro;.',
						"Skrjabin_Alexander.jpg","Skrjabin_Alexander_240.jpg"); 
						print rwEv('Sontag 25. Oktober<br/>11.00 Uhr',
						'Konzert',
						'Mit:
						<ul>
						<li>A.Skrjabin [2015 ist die Centenery seines Todes]
						<ul>
						<li> Sonate Nr.2 Op.19 (Andante,Presto)</li>
						<li>Sonata No.4 Op.30 (Andante, Prestissmo Volando)</li>
						<li>Etude E-Dur Op.8 Nr. 5</li>
						<li>Etude Gis-Moll Op.8 Nr.9</li>
						<li>Etude B-Moll Op.8 Nr.11</li>
						<li>Etude Dis-Moll Op.8 Nr.12</li>
						<li>Etude Fis Dur Op.42 Nr.4</li>
						<li>Etude Cis-Moll Op.42 Nr.5</li>
						<li>Etude Des Dur Op.42 Nr.6</li>
						<li>Etude Es-Dur Op.42 Nr.8</li>
						</ul></li>
						<li>S.Rachmaninow <ul>
						<li>Polka de W.R.</li>
						<li>Prelude D-Dur Op.23 Nr.4</li>
						<li>Prelude G-Moll Op.23 Nr.5</li>
						<li>Prelude C-Moll Op.23 Nr.7</li>
						<li>Etude Gis-Moll Op.8 Nr.9</li>
						<li>Etude B-Moll Op.8 Nr.11</li>
						<li>Etude Dis-Moll Op.8 Nr.12</li>
						<li>Etude Es-Dur Op.33 Nr.7</li>
						<li>Etude C-Moll Op.39 Nr.1</li>
						<li>Etude Es-Moll Op.39 Nr.5</li>
						<li>Etude D-Moll Op.39 Nr.8</li>
						</ul>
						</li>
						</ul>
						<a href="http://www.elztalmuseum.de/">Elztal Museum</a>, Kirchplatz 14, D-79183 Waldkirch. 17&euro; ,15euro; ( erm.), 9euro; (Kinder).',
						"etzal_240.jpg","Etzal%20Museum");
						print rwEv('Sontag 27. December<br/>19:30Uhr',
						'Poesie und Piano',
						'Hymne an die Nacht von Novalis mit Klavierstücke von Chopin, Skrjabin und Schumann.
						Mit Martin Lunz (Rezitation) und William Cuthbertson (Klavier).
						Am <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>, Kanderner Strasse 18, 79410 Badenweiler,Breisgau-Hochschwarzwald, Baden-Württemberg.
						Eintritt 12 €.',
						"martinwilliam_240.jpg","Martin Lunz+William%20Cuthbertson");
						print rwYr('2014');
						print rwEv('Donnerstag 30. Januar<br/>20.00 Uhr',
						' Gao Weimo+William Cuthbertson Eurythmie Saal  Konzert',
						'C.Cui : &quot;Causerie&quot;    (Klavier)
						<br/>
						Liu Zhuang : Romantisches Stück    (Klavier und Cello),  Improvisation 1 (Klavier und Cello)
						<br/>
						W.Cuthbertson: Nocturne (Klavier) + Walzes (Klavier) +3 Kleine Stücke (Klavier+Cello) +Improvisation 2 (Klavier und Cello)
						<br/>
						Xu Xiyi :Lullaby  (Klavier und Cello)
						<br/> 
						 F.Chopin: Nocturne F-Dur  (Klavier) Op.15 Nr.1+ 
						 Nocturne  Fis-Dur (Klavier) Op.15 Nr.2
						 <br/> 
						 P.Tschaikowski : Rococo Variationen (Piano und Cello) Op.33
						<br/>
						<a href="https://www.lahnhoehe.de/start/">Klinic lahnhohe</a>,Am Kurpark 1, 56112 Lahnstein, Deutschland. Eintritt frei, Spenden willkommen.');
						print rwEv('26. Januar<br/>10.30 Uhr',
					 	'Konzert',
						'<ul>
						<li>J.S.Bach, 3 Suite für Violoncelllo C-Dur</li>
						<li>C.Cui, Causerie    (Klavier)</li>
						<li>Liu Zhuang,  Romantisches    Stück </li>
						<li>Xu Xiyi, Wiegenlied, (Klavier &amp; Cello)</li>
						<li>W.Cuthbertson. 3 Kleine Stücke (Cello &amp; Klavier)</li>
						<li>F.Chopin, Nocturne F-Dur  Op.15 Nr.1 (Klavier)</li>
						<li>F.Chopin, Nocturne Fis-Dur  Op.15 Nr.2 (Klavier)</li>
						<li>P.Tschaikowski. Rococo  Variationen Op.33 </li>
						</ul>
						&euro;10 Karten sind jetzt schon erhältlich (oder können  vorbestellt werden) von Jäger und Brommer, Gewerbekanal 1, Waldkirch.Tel: 07681  3927  (zum zurücklegen bis zum  Konzert ) und von der Buchhandlung  Augustiniok (muss spätestens am Vormittag   den 25.1 abgeholt werden)   Langestr. 25-29, Waldkirch. Tel: 07681 409041.
						<br/>
						Orgelbauersaal, Gewerbekanal 1, 79183 Waldkirch.' ,
						"William_Weimo_Cello_240.jpg","Gao%20Weimo%20&amp;%20William%20Cuthbertson");
					print rwEv('Sontag 6. April<br/>11.00Uhr',
							'Trio-Rezital &quot;Spätromantische Naturstimmungen&quot; mit Gesang, Cello und Klavier',
							'Elztalmuseum Waldkirch; <br/>
						Eintritt: &euro;17 / &euro;15 / Kinder &euro;9
						<ul class="ulsquare">
						<li> William Cuthbertson, Klavier</li>
						<li> Margriet van Reisen</li>
						<li>Antoine Billet</li>
						</ul>
						<ul><li>Joseph Glaeser - Vier Lieder </li>
						<li>Dmitri Schostakowitsch -  Lied der Ophelia</li>
						<li>Pjotr I. Tchaikovsky - Valse sentimental  Nur wer die Sehnsucht kennt</li>
						<li>Alexandr Dargomiskji -  Ana Pridjot</li>
						<li>Johannes Brahms - Meine Liebe ist grün,
						 Da unten im Tale,
						 Och Mod\'r, ich well \'n Ding hah\'n
						</li>
						<li>Paul Graener -  Drei Lieder \'Eine Singstimme und ein Cello musizieren\'</li>
						<li>Felix Mendelssohn - Lied ohne Worte</li>
						<li>Alphons Diepenbrock -  Berceuse</li>
						<li>Jules Massenet -  Élégie</li>
						</ul>',
						 "cello_240.jpg", "Antoine%20Billet");
						 print rwEv('Dienstag 24. Juni<br/>20.00Uhr ',
						 'Mozart bis Bob Dylan',
						'Waldkircher Musiker singen und spielen Musik von &quot;Mozart bis Bob Dylan&quot; zugunsten Opfern der Feuerkatastrophe in Valparaiso z.B. mit Wolfgang Brommer, William Cuthbertson, Stephan Ronkov, Frauke Hofmann, Carina Kaltenbach, Manuel Torres, Adrian Oswalt und Markus Trenkle.
						<br/>Stadtkapelle,  Lange Strasse,  Waldkirch ',
						"benefitconcert_240.jpg","Mozart%20bis%20Bob%20Dylan");
						print rwEv('Sontag 1. Juni<br/>15.00 Uhr',
					    'Lesung mit Musik: <a title="Bulgarische Impressionen" href="https://www.facebook.com/events/405564799585463/">Bulgarische Impressionen &ndash; abenteuerliche Reise durch ein unbekanntes Land</a>  &ndash; Helmut Matt.',
						'Musik Live mit William Cuthbertson und Carina Kaltenbach: Dvorak Humoreske, 
						Tschaikowski Sérénade melancolique und 2 Bulgarische Volkslieder, Sektempfang.
						 <br/>
						 Reiseb&uuml;ro am Markt/Fiore, Lange Straße 65, Waldkirch. 
						  <br/>
						Eintritt frei, Spenden für die Musiker sind willkommen.',
						"CorinaKaltenbach_240.jpg","Carina%20Kaltenbach");
						print rwEv('Sonntag 13 Juli<br/>11.00 Uhr',
						'Klavier Matin&eacute; mit William Cuthbertson',
						' <ul>
						  <li>L.van Beethoven,	Sonate Es-Dur Op.81a <em>"Les Adieux"</em>	</li>
							<li>F:Chopin,	Berceuse Des-Dur Op.57, Tarantella As-Dur Op.43		</li>
							<li>F.Liszt,	Verdi Rigoletto Paraphrase	</li>
							<li>Glinka, bearb.von M.Balakirew	"<em>Die Lerche</em>"		</li>
							<li>E.Granados,	<em>Das Mädchen und die Nachtigall</em> (aus Goyescas) </li>
							<li>J.Brahms,	Variationen über ein Thema von Paganini Op.35 Heft 1	</li>
						</ul>
						<a href="http://www.elztalmuseum.de/">Elztalmuseum</a>, Kirchplatz 14, Waldkirch. Eintritt: 17&euro;/15&euro; Kinder 9&euro;',
						 "williamatpiano_240.jpg", "William%20at%29piano");
						 print rwEv('Sonntag 20. July<br/>14.00 Uhr',
								'<a href="https://www.facebook.com/events/418229254981777/">Open Air Konzert mit den Waldkircher Tanzrhythmiker</a>',
						'Am Stadtrainsee Waldkirch. Das Orchester mit Tanzmusik im Stile der 1930er bis 60er Jahre',
						"openair2014_240.jpg","Open Air Konzert");
						print rwEv('Montag 21. July<br />20.00 Uhr',
								'Zeltkultur, Elzach ',
								'auf dem Schulhof in Elzach im Zirkuszelt statt). 
								Kartenvorverkauf: Buchhandlung Merkle. 
						 Eintritt: 8/7&euro;',
     					"WilhelmBuschAbend_240.jpg","Wilhelm%20Busch%20Abend%20mit%20William%20Cuthbertson%20und%20Martin%20Lunz");
	                    print rwEv('Montag 4. August<br/>20.30 Uhr',
						' Weitere Konzerte',
						' im <a href="http://theislayhotel.com/" title="Islay Hotel">Islay Hotel </a>
						(Sponsor)<br/> 
						Charlotte Street, Port Ellen, Isle of Islay, Schottland.',
						"islayhotel.jpg","islay%20hotel","http://theislayhotel.com/");
						print rwEv('Mittwoch 6. August<br/>Mittags',
						'Weitere Konzerte',
						' Im  Ardbeg Distillery 
						(Sponsor)<br/>
						Port Ellen, Islay, Argyll Schottland PA42 7EA.',
						"ardbeg.gif","Ardbeg%20Distillary","http://www.ardbeg.com");
						print rwEv('Freitag 8. August<br/>19.30 Uhr',
						'Konzert mit William Cuthbertson und Fiona Middleton ("Fiona of the seals") , Violin, Gesang.',
						' Werke von Franck, Kreisler, Elgar, Fauré, Liszt, Cuthbertson and Middleton .<br/>
						Islay Gaelic Centre (Ionad Chaluim Chille Ìle ), Bowmore PA43 7LN, Islay, Schottland.
						Eintritt: &pound;10',"islaycentre.JPG", "Islay%20Centre","http://theislayhotel.com/");
						print rwEv('Sontag 19. Oktober<br/>11.00 Uhr',
						 'Musikalische Liebeszeitreise "Die Liebe im Wandel der Zeit" / Duo',
                        '<a href="http://www.frauke-hofmann.de">Frauke Hofmann</a> (Mezzosopran), William Cuthbertson (Flügel)
							<br/>
						ORT:Orgelbauersaal Gewerbekanal 1, Waldkirch.
						Die Mezzosopranistin Frauke Hofmann und der Konzertpianist William Cuthbertson stellen das schönste Thema der Welt musikalisch im Laufe der Jahrhunderten dar. Hat sich das Thema mit der Zeit gewandelt? Die Reise geht von der Renaissance bis in die Moderne. Lieder, Arien, und Klaviermusik von Dowland, Bizet, Rachmaninov, Weil und jiddischen Tango bis zum Musical beleuchten, ergänzt durch Testerläuterungen, was die Zeit mit der Liebe macht. in deinem spannenden Programm wird z.B. die "Habanera" aus Carmen und der "Liebestraum" von Liszt zu hören sein. Diese Performance ist Teil der  <a href="http://kulturwoche-waldkirch.de/programm.php">Kulturwoche Waldkirch</a>.',
						"hoffman_240.jpg","Frauke%20Hofmann" ,"http://www.frauke-hofmann.de");
						print rwEv('Donnerstag 16. Oktober<br/>20.00 Uhr',
						'Poesie und Piano',
						' "Zeit - Ewigkeit - Vergänglichkeit: Eine Reise" / Litera Theater, Martin Lutz &amp; William Cuthbertson
						ORT:Orgelbauersaal, Gewerbekanal 1, Waldkirch. Einlass 19.30 | Eintritt 10 &euro;.
						Eine Collage aus Texten zu "Zeit-Ewigkeit -Vergänglichkeit" gepaart mit Klaviermusik von und mit William Cuthbertson öffnet den Zuhörern neue Räume, auch durch die Verbindung der Rezitationen des Schauspielers Martin Lutz. Eine Sprach und Klangreise. Diese Performance ist Teil der  <a href="http://kulturwoche-waldkirch.de/programm.php">Kulturwoche Waldkirch</a>',
						"WilhelmBuschAbend.jpg","WilhelmBuschAbend_240.jpg");
						 print rwYr('2013'); 
						print rwEv('Juli',
						'Konzert',
						'<ul>
						<li>F.Schubert, Sonate B-Dur  D 960</li>
						<li>J.Brahms, 6 Klavierstücke</li>
						</ul>
						Waldkirch');
						print rwEv('28. und 29. September<br/>17.00 Uhr',
						'Klavierkonzert',
						'<ul>						
						<li>Schubert Sonate B-Dur D 960 </li>
						<li>Brahms 6 Klavierstücke Op.118</li>
						<li>Eintritt frei, Kollekte. </li>
						</ul>
						Elfenau Park, Bern, Schweiz,  Elfenauweg 50, 3006 Bern');
						print rwEv('10. Oktober <br/>20.00 Uhr ',
									'<a href="https://www.facebook.com/events/574251399303080">Poesie und piano</a>',
									'Gedichte von Wilhelm Busch, Musik von William Cuthbertson Eintritt frei, Kollekte.
						<br/>
						Haus Sonneneck, Badenweiler.',
						 "poemsandpiano_200.jpg","Poems%20und%20Piano","https://www.facebook.com/events/574251399303080");
						 print rwEv('12. Oktober <br/>19.00 Uhr',
						 '	<a href="https://www.facebook.com/events/574251399303080">Poesie und piano</a> ',
						 'Gedichte von Wilhelm Busch, Musik von William Cuthbertson <br/>
						Eintritt &euro;10 <br/>
						Orgelbauersaal, Gewerbekanal 1,Waldkirch.');
						 print rwEv('6. November <br/>20.00 Uhr',
						'<a href="https://www.facebook.com/events/233043576858233/">Dr.Ulrich Ruh (Herder-Korespondenz)</a>',
						'William Cuthbertson spielt dazu Liszt/Wagner Isoldens Liebes-Tod und Liszt/Verdi Rigoletto.<br/> 
						Katholischen Gemeindezentrum, Kirchplatz 7,Waldkirch ');
						print rwYr('2012');
						 print rwEv('Juli',
						 'Konzert',
						 '<ul>
						 <li>Beethoven Sonate B-Dur Op.106, &quot;für das Hammerklavier&quot;</li>
						<li>Werke von Debussy,</li>
						<li>Balakirew, "Islamei"</li>
						</ul>
						Waldkirch');
						 print rwEv('Juli',
						'Hudié Duo mit Sun Yiqi (Violine)',
						'Herbolzheim ');
				 print rwEv(' Oktober',
					'Erröffnungs Konzert der Waldircher Kulturwochen',
					' Hudié Duo mit Fiona Middleton (Violine).
						Werke von Brahms, Franck, Cuthbertson und Middleton.<br/>
						Waldkirch');
					print rwEv('Oktober',
					'Waldircher Kulturwochen',
					'Gershwin mit dem Waldkircher Blechbläserensemble. Waldkirch',
					 "Neues%20Bild_200.jpg","Rhapsodie%20in%20Blue"); 
					 print rwEv('5. Oktober, 20 Uhr,',
					 'Waldircher Kulturwochen: Eröffnungskonzert',
					 'William Cuthbertson (Klavier) und seine Schwester Fiona Middleton (Violine/Gesang) spielen Werke von Bach, Dvorak, Franck u.a. sowie eigene Kompositionen.  Orgelbauersaal, Gewerbekanal 1, 
					 Eintritt 12&euro;, Kinder 6&euro; (mit Kulturwochen-Pin 1 Euro Ermäßigung)',
					 "williamcuthbertsonfionamiddleton2012_120.jpg");
					print rwEv('November',
					'Tournée mit Fiona Middleton',
					'Hier die  Uraufführung  der Winnie-the-Pooh Suite für solo violin (gewidmet an Sun Yiqi) von William Cuthbertson 
							<br/>
							Stonehouse, Manchester (Benefiz), Liverpool Cathedral, Watford, Wadhurst, UK.',
							"Img_2402_200.jpg","Nov.26th%202012%20in%20St.%20James,%20Piccadilly,%20London,%20England,%20wo%20William%20spielte%20Beethovens%20Hammerklavier-Sonate.");
					print rwEv('November',
					'Beethoven &quot;Hammerklavier&quot; Sonate. ',
					'St.James Piccadilly, London UK	');
					print rwYr('2011');
					print rwEv('24. September<br/>17. Oktober<br/>29. Oktober',
					     '<a href="doc/FlyerLiszt2011992_William.pdf">Liszt Konzerte</a>',
						 ' <ul>
						<li>Robert Schumann, Fantasie C-Dur</li>
						<li>Franz Liszt, Sonate h–Moll</li>
						<li>Franz Liszt, Ungarische Rhapsodie Nr.4</li>
						<li>Franz Liszt, Liebesträume – Drei Notturnos: Nr.1 As-dur, Nr.2 E-dur, Nr.3 As-dur</li>
						<li>Franz Liszt,  Sonetto del Petrarca aus Annés de pelerinage, Deuxième Année - Italie</li>
						<li>Franz Liszt, Vallée d\'Obermann aus Annés de pelerinage, Première Année - Suisse</li>
				</ul>');
				print rwYr('2010');
				print rwEv('1. März <br/>11. April,<br/>11. Juli,<br/> 
						19.&nbsp;September<br/>
						8. Oktober',
 						'<a href="doc/FlyerChopin.pdf">Chopin Konzerte</a>',
						'Orgelstiftung, Elztalmuseum, Gemeindezentrum St. Margarethen, Waldkirch.
						<ul>
						<li>Die 4 Scherzi, die 4 Balladen</li>
						<li>Sämtliche Etuden</li>
						<li>Die Impromptus, die Preludes</li>
						<li>14 Walzer, die Barcarolle,die Fantasie, die Berceuse</li>
						<li>Die 3 Sonaten</li>
						<li>Ausgewählte Polonaisen,Mazurken und Nocturnes</li>
						</ul>');?>
						</main>
						<?php print foot();?>
                   </div>
				</div>
				</div>
 	<?php  print endPage();?>
 </body>
</html>