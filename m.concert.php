<?php 
	require "funcz/m.functionz.php";
     print head("de","Concerts","concert.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<?php
function  doimg($pic,$ttl,$url="")
{
     $ttl=respace($ttl);	
	  if (strlen($url)>0)
	 {
		 $ret.= '<a href="'.$url.'" ';
	 $ret.=' title="'.$ttl.'" ';
	 $ret.='>';
	 }
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" align="right" />';
      if (strlen($url)>0) $ret.= '</a>';
	 return  $ret; 
}
function rwYr($yr)
{
	return '<tr><td colspan="3" style="border-radius	: 3px;
  border		: 1px solid;
  border-color	: #666;
  border-width	: 2px;
  font-weight	: bolder;
  font-size		: 20pt;
  text-align	: center;
  padding-bottom: 4px;
  margin-top	: 10px;
  margin-bottom	: 10px;">'.$yr.' </td></tr>';
}
function rwEv($dt,$ttl,$ev,$photo="",$photottl="",$photolink="")
{
	$ret='<article>
			<tr> 
				<td class="boldTxt">'.$dt.'</td>
			    <td><div  class="boldTxt">'.$ttl.'</div>'.$ev.'</td>';
  				if (strlen($photo)>0)
				{
					$ret.='<td>';
					if (strlen($photolink)>0) $ret.=doimg($photo,$photottl,$photolink);
					else 					 $ret.= doimg($photo,$photottl);
					$ret.='</td>';
				}
		$ret.='</tr>
		</article>';
 	return $ret;
}			

?>
<div data-role="page" id="pageone"> 
  <header>
  <div data-role="header">
    <?php print top("de","Konzerte","Konzerte"); ?>
</div>
  </header>
  <main>
      <div data-role="main" class="ui-content" >
	  <table  title="Konzerte" cellpadding="6">
     	<?php
			print rwYr('2017'); 
			 print rwEv("Freitag 10.März<br/>15.00Uhr",
			 "<B>Concert</B>",
				'<a href="https://www.derburgerspittel.ch/angebot/der-burgerspittel-im-viererfeld">Der Burgerspittel im Viererfeld</a>, Bern, Switzerland.
						<ul>
						<li>Johann Sebastian Bach, Partita C-Moll</li>
						<li>Franz Schubert, Sonate A-Dur</li>
						<li>Maurice Ravel, Pavane pur une infante défunte, Valses nobles et sentimentales</li>
						</ul>
					Entrance free.'); 
			print rwEv("Samstag 1. April",
		             "Liszt Concert with William Cuthbertson (Piano) and Stephan Ronkov (Organ)",
					 '<ul>
						<li>F.Liszt Fantasy and  Fuge on the Choral "Ad nos, ad salutem undam" für Orgel</li>
						<li>F.Liszt Sonata in B Minor for Piano</li>
					</ul>
					<a href="http://www.ksew.de/cms/website.php?id=/w/index.htm">St.Margarethen Church</a>, Waldkirch.',
					"stMargarethenWaldkirch_240.jpg","Kirche St.Margarethen");
				 print rwEv("Samstag 9.<br/>Sontag 10.<br/>September<br/>17.00 Uhr",
						'Concert at <a href="http://www.elfenaupark.ch/">Elfenau Park</a>, Bern, Switzerland',
						"<ul> <li>J.S.Bach Goldberg Variations</li>	</ul>",
						"elfenau.jpg" ,"Elfenau Park");
				print rwEv('27.September Bad Krozingen<br/>
							28.September Lörrach<br/>
							6.October  Freiburg<br/>
							7.October Schopfheim<br/>
							20.October Bad Säckingen<br/>
							9.November Schopfheim<br/>
							9.December Emmendingen',
				'Konzertreihe für Senioren und Kranken mit Ivetta Viatet (Russland), Violin',
				'<ul><li>Wolfgang Mozart Sonate G Major KV379</li>
				<li>Fiocco, Allegro</li>
				<li>Igor Stravinski Russian Child\'s Song</li>
				<li>Martinu 3 Arabesques</li>
				<li>Edward Elgar Salut d\'amour Op.12,/li>
				<li>Wieniawski, Polonaise A-Dur Op.43</li>
				<li>Pablo Sarasate, Introduktion und Tarantella</li>
				</ul>',
				'2017violinpiano_240.JPG','Concert Season for the Old and Infirm with Ivetta Viatet (Russia), Violin');
				 print rwEv("Sontag 8.October<br/>17.00Uhr",
					"J.S.Bach, Goldberg Variationen",
					'<a href="http://www.gutshof-guentert.de/">Gutshof Güntert</a>, 
					Schloßgasse 4, 79295 Sulzburg-Laufen,Markgräflerland, Baden-Württemberg,Germany.Tickets from &euro;20 - 
					Karten ab 20&euro; &ndash; <a href="https://www.reservix.de/tickets-bach-goldberg-variationen-william-cuthbertson-klavier-in-sulzburg-gutshof-guentert-am-8-10-2017/e1077188">hier</a> kaufen.',
					"gusthof.jpg","Gutshof Güntert","http://www.gutshof-guentert.de/");
				 print rwEv("Montag 30. October-<br/>Samstag 4.November",
					'<a href="masterclasses_e.php">Peter Feuchtwanger Piano Masterclass</a>',
					'Details <a href="masterclasses_e.php">here</a>',
					'Peter_Feuchtwanger_250.jpg',
					'Peter  Feuchtwanger:photo Stefan Blido, Wertheim',
					'http://de.wikipedia.org/wiki/Peter_Feuchtwanger');
				print rwEv("Mitwoch 1. November<br/>19.00 Uhr","Klavier Konzert",
					'Mit: <a href="http://www.ekaterine.de">Ekaterine Khvedelidze</a><ul><li>César Franck:Zhukov Prélude, Fugue et Variation op. 18</li><li>Alexander Skrjabin: 12 Préludes, op. 11 </li><li>Frédéric Chopin: 12 Préludes, op. 28</li></ul>
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
					  "orgel1_240.jpg",
					  "Orgelbauersaal",
					  "http://www.waldkircher-orgelstiftung.de/"); 


					  
	  print rwEv("Montag 20. November<br/>19.00 Uhr","Internationaler Chopin Klavier Wettbewerb Konzert",
			"<ul>
				<li>William Cuthbertson
					<UL>
					<LI>F.Chopin: Barcarolle Op.60 </LI>
					 <LI>F.Chopin :   Ballade Op.52</li>
					 </ul>
			 </li> 
			<li>Eliane Reyes 
				<ul>
				<li>M.Ravel, Jeux d’eau</li>
				<li>C.Debussy : L’isle joyeuse</li>
				</ul>
			</li>
			<li>Saori Haji
				<ul>
					<li>C.Debussy: Reflets dans l’eau</li>
					<li>F.Chopin : Waltz   Op.64 Nr.2</li>
					<li>M.Ravel : Scarbo</li>
					</ul>
				</li>
				</ul
			 </li></ul> 
			Siam Ratchada Auditorium, Yamaha Ratchadapisek Music School, Bangkok, Thailand.",
			"siam.jpg");


			  print rwYr('2016');
				print rwEv("Freitag 11.	März",
					'Concert at <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>',
					'Kanderner Strasse 18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg, Germany. 
					<ul>
						<li>F.Schubert, Impromptu G flat major Op.90 No.3, Impromptu B flat major Op.142 No.3</li>
						<li>A.Scrjabin, Sonata No.2  Op.19</li>
						<li>F.Chopin, Sonata No.2 B flat minor Op.35</li>
					</ul>',
					'sonneneck_240.jpg','Haus Sonneneck');
					print rwEv('Sontag 20.März',
					 'Concert, Stiftung Beatus, Sigriswil, Switzerland',
					'<ul>
						<li>A.Scriabin Sonata Nr.2 Op.19</li>
						<li>S.Rachmaninoff Prelude in D major Op.23 No.4</li>
						<li>F.Schubert Impromptu G flat major Op.90 No.3</li>
						<li>F.Chopin Sonata Nr.2 in B flat minor Op. 35</li>
					</ul>',
					"stbeatus.jpg","Stiftung St.Beatus","http://www.stbeatus.ch/");
					print rwEv("Mitwoch 25. Mai<br/>18.00Uhr",
					'Concert In the <a href="http://balamus.ru">Balakhna Museum of History and Art</a>, Nizhny Novgorod, Russia.',
					'	<ul>
						<li>F.Chopin   Sonata Nr.2 in B flat minor	Op. 35</li>
						<li>S.Rachmaninoff	Polka de W.R.</li>	
						<li>F.Schubert  Impromptu Ges-Dur 	Op.90 Nr.3, Impromptu B-Dur	Op.142 Nr.3</li>
						<li>A.Skrjabin Sonata No.2	Op.19 </li>
						</ul>',
					"russiaconcert_240.jpg","Balakhna Museum für Geschichte und Kunst","http://balamus.ru");
					print rwEv("Sun<br/>Juli<br/ 3.>11.00 Uhr",
					"Concert at the Elztalmuseum, Waldkirch ",
						"<ul>
							<li>L.van Beethoven Sonata E flat major Op.31 No.3</li>
							<li>F.Chopin 3 Mazurkas Op.59</li>
							<li>R.Schumann Études Symphoniques Op.13</li>
						</ul>","etzal_240.jpg","Etzal Museum");
						print rwEv("Sontag 10. Juli <br/>11 am",
						 "Duo recital  Piano and Violin",
						 ' William Cuthbertson—piano, Carina Kaltenbach-Schonhardt-violin	
						 <UL>
							<LI>L.van Beethoven, 1st mov, Sonata for violin und piano No.5  F major, Op. 24</LI>
							<LI>F.Schubert, Impromptu G flat major Op.90 No.3   (piano)</LI>
							<LI>Cesar Franck,    Sonata for violin and piano A major</LI>
							<LI>Antonin Dvorak,  Humoresque</LI>
							<LI>William Cuthbertson,   Butterfly Bounce No.1</LI>
							<LI>Fritz Kreisler, Schön Rosmarin</LI>
						</UL><a href="http://www.friedrich-husemann-klinik.de/">Friedrich-Husemann Klinik</a>,
						 Friedrich-Husemann-Weg 8, 79256 Buchenbach, Freiburg, Germany',
						 "duo.jpg","William Cuthbertson, Carina Kaltenbach"); 
						print rwEv("Mitwoch August 31. <br/>17.30 Uhr",
						"Peter Feuchtwanger Memorial concert, Part 1",
						'To honour the legacy of the pianist, pedagogue and composer Peter Feuchtwanger, 
						many of his former students will perform in two concert events.
					<br>
					Rossinis "Semiramide" Overture, arr. Czerny, for 16 pianists on 8 pianos. 
					 <br/>
					At <A href="http://www.lepthien.de/">Pianohaus Lepthien</a>  ‪Schwarzwaldstraße 9A, 79117 Freiburg im Breisgau‬. 
					Entry free. 
					For all those who are interested in attending both events, there will be a direct bus transfer organised (from Freiburg to Waldkirch and back, for around 6€ each way).
                    To book transport, please email: <A href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.',
					"pianos.png" ,"Pianos");
					
			print rwEv('Mitwoch August 31.<br/>10.30 Uhr',
					'Peter Feuchtwanger Memorial concert, Part 2',
    		    'the Baroque room,  Elztalmuseum, Waldkirch.
				<ul>
			<li>Joseph Haydn, Adagio F Major Hob. XII/9 - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li> 
			<li>Franz Xaver Mozart, Andantino A Major FXWM:41 - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li>
			<li>Joseph Haydn, Sauschneidercappriccio - Robert Bärwald </li>
			<li>Peter Feuchtwanger, Variations - Lennart Speer</li>
			<li>Franz Schubert, Walzes D779 No.1 (1823), Nr.2 Ländler D 366 Nr.3,4 - Agnes Joshi</li>
			<li>Jean Sibelius, The Fir, Op.75 Nr.5  - Agnes Joshi</LI>
			<LI>Peter Feuchtwanger, Tariqa No.2 - <a href="https://www.youtube.com/watch?v=-OONZvd7X6k">Christian Löschke</a></LI>
			<LI>J.S. Bach, Andante from Piano Concerto in F minor BWV 1056 - Daniel Kasparian </LI>
			<li>Friedrich Kuhlau, Rondo C Major on Themes from Mozarts "Don Giovanni" -  Daniel Kasparian</li>
			<li>Peter Feuchtwanger, Study in the Eastern Idiom  Op.3 (Macedonian and Bosnian)- <a href="http://www.masako-kamikawa.com/">Masako Kamikawa</a>.</li>
			<li>Elisabeth Jaquet de La Guerre, Prelude-Allemande-Menuet-Gavotte aus der Suite A-Moll - Anna Roth </LI>
			<LI>Felix Mendelssohn, Bartholdy Fantasia in F sharp minor Op.28 Con motto Agitato, Allegro con Moto, Presto - Manfred Seewann </LI>
			<LI>Ina Birk, Soniyage - <a href="http://www.ina-birk-klavier.de/">Ina Birk</a></LI>
			<LI>Giacinto Scelsi, Rotativa - <A href="https://en.wikipedia.org/wiki/Marianne_Schroeder">Marianne Schroeder </a>.</LI>
			<LI>Frederik Chopin, Nocturne in C sharp minor, Op.post - Nina Attorf </LI>
			<LI>Louis Moreau Gottschalk, La Gallina Op.53, Ojos Criollos, Dance Cubaine	Op.37 - <a href="http://www.blido.de/">Stefan und Fedra Blido</a> </LI>
			<li>Serge Bortkiewicz, Etüde Des-dur Op. 15, Nr. 8 - Klaus Cutik </li>
			<LI>Franz Liszt, Freudvoll und Leidvoll - <a href="http://www.mezzo-soprano-sophia-grech.co.uk/">Sophia Grech</a>, mezzosoprano und <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic</a>, Klavier </LI>
			<LI>Benjamin Vanden Heuvel, From 4 Short Piano Pieces No.3,4 Dirge and American Suite, with mprovisation - <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic </a></LI>
			<LI>César Cui, Causerie - William Cuthbertson</LI>
			<LI>Franz Liszt, Consolation No.3 in Des Dur - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<LI>L. M. Gottschalk, Souvenirs d Andalousie - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<li>Franz Schubert, Polonaisen D599 No. 1,2 - <a href="https://de.wikipedia.org/wiki/Paul_Cibis">Paul Cibis</a> und <a href="https://de.wikipedia.org/wiki/Sophie-Mayuko_Vetter">Mayuko Vetter</a>  </li> 
    		<LI>Manuel de Falla, Fire Dance from The Love Spell - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Shura Cherkassky, Prelude Pathétique  - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Ludwig van Beethoven, 6 Bagatellen Op.126, No.1,2,3 - <a href="https://de.wikipedia.org/wiki/Jean-Jacques_D%C3%BCnki">Jean Jaques Dünki</a></LI>
		 	<LI>Robert Schumann, Evening - Andrew Kraus</LI>
			<LI>Adolph von Henselt, Wiegenlied  - Andrew Kraus</LI>
			<LI>Franz Schubert, arr. Leopold Godowsky, Wiegenlied - Andrew Kraus</LI>
			<LI>David Saperton, Zephyr - Andrew Kraus</LI>
			<LI> E.Granados - Andaluza and Allegro de Concerto - <a href="https://www.facebook.com/emma.stratton.39"> Emma Stratton</a></LI>
		
			</ul>		
 					Tickets: 12&euro; / 10&euro;(conc) / 9&euro;(children). ',
 	              	 "Peter_Feuchtwanger_250.jpg","Peter_Feuchtwanger");
					 print rwYr(2015);
					 print rwEv('Freitag März 13.<br/> 8.30pm ',
					 '<A href="http://www.klappe11.de/">Klappe11 : CHARLEY CHASE / LIMOUSINE LOVE At the Piano: William Cuthbertson</A>',
					 'Limousine Love One of the best short silent films ever with Charley Chase in the lead role! 
					 Chase was not an easy slapstick comedian, but coined a form of situation comedy in which he usually appeared as a shy, nervous average citizen or as a young daredevils. 
					 So also LIMOUSINE LOVE is hilarious: suddenly discover Chase has on the way to his own wedding that a naked, totally unknown woman is in the back seat of his car ... Admission: Adults € 5.50. 
					 At Kommunales Kino, Fabrikstrasse 16, 79183 Waldkirch, Germany',
					"klappe11.jpg","Klappe11 Festival","http://www.klappe11.de/");
				   
				   print rwEv('Samstag 28.<br/>Sontag 29.März<br/>17.00Uhr',
				   'Concert',
				 		'<ul>
						 <li>Beethoven Sonata E flat major "Les Adieux" Op.81a</li>
						<li>Chopin Tarantella A flat major Op.43</li>
						<li>Granados The maiden and the nightingale ( Goyescas)</li>
						<li>Glinka, arr. M.Balakirew "The lark"</li>
						<li>F.Liszt, Verdi Rigoletto Fantasy</li>
						<li>A.Skrjabin (1872-1915) Poème F sharp major Op.32 No.1, Sonata No.4 Op.30</li>
						</ul>');
				 	print rwEv('Sontag 19. April <br/>11.00Uhr',
						'Concert',
						'including:<ul>
							<li>Chopin, 24 Preludes Op.28</li>
							<li>Schriabin, 24 Preludes Op.11</li>
						</ul>
						Orgelbauersaal, Gewerbekanal 1, Waldkirch, Germany.',
						"orgelbauersaal_240.jpg" ,"orgelbauersaal",
						"http://bz-ticket.de/orgelbauersaal-waldkirch-waldkirch");						
		             print rwEv('Sontag 19. September<br/>19.30Uhr', 
						'Benefit Concert donated for the renovation of the community center',
						'With:<ul>
						<li>William Cuthbertson (Piano)</li>
						<li>Heinz Vogel (Piano)</li>
						<li>Carina Kaltenbach-Schonhardt (Violin)</li>
						<li>Nicole Friedrich (Violin)</li>
						<li>Katharina Weeber (Viola)</li>
						<li>Carolina Berghorn (Violoncello) </li>
						<li>Michael Bornhak (Double Bass) </li>
						<li>Frauke Hoffmann (Mezzosoprano)</li>
						<li>Fritz Schätzle (Baritone)</li>
						<li>Ursula Disch (Acordion and French Chansons)</li>
						</ul>
						At the Catholic community center, Kirchplatz, 79183 Waldkirch.
						Eintritt frei, Spenden willkommen zu heissen.',
						"KatholischesGemeindezentrumWaldkirch_240.jpg","Katholisches Gemeindezentrum Waldkirch");
				   print rwEv('Montag 5. Oktober<br/>20.00Uhr',
				   'The musician Alexander Scriabin (1871-1915) Concert and lecture',
					'Catholic community center , Church Square 7, Waldkirch. 
					<br/>
					At the Piano: William Cuthberson, Waldkirch; 
					<br/>
					Introduction: Dr. Ulrich Ruh, a journalist from Elzach.<br/>
					<br/>
						Music: inter alia, Sonata No.5 and 6.
					<br/>
						Entry 3 Euros');
					print rwEv('Sontag Oktober 25.<br/>11.00 Uhr',
					'The musician Alexander Scriabin (1871-1915) Concert and lecture',
					'Catholic community center , Church Square 7, Waldkirch. 
					At the Piano: William Cuthberson, Waldkirch. 
						Concert including:
						<ul>
						<li>Alexander Scriabin 
						  <ul class="ulsqr" >
						<li>Etude E major Op.8 Nr. 5</li>
						<li>Etude G sharp minor Op.8 Nr.9</li>
						<li>Etude B flat minor Op.8 Nr.11</li>
						<li>Etude D sharp minor Op.8 Nr.12</li>
						<li>Etude F sharp major Op.42 Nr.4</li>
						<li>Etude C sharp minor Op.42 Nr.5</li>
						<li>Etude D flat major Op.42 Nr.6</li>
						<li>Etude F minor Op.42 Nr.7</li>
						<li>Sonata No.2 Op.19</li>
						<li>Sonata No.4 Op.30</li>
						</ul>
						</li>
						<li>Sergei Rachmaninoff 
						<ul class="ulsqr" >
						<li>Polka de W.R.</li>
						<li>Prelude D major Op.23 Nr.4</li>
						<li>Prelude G minor Op.23 Nr.5</li>
						<li>Prelude C minor Op.23 Nr.7</li>
						<li>Etude E flat major Op.33 Nr.7</li>
						<li>Etude C minor Op.39 Nr.1</li>
						<li>Etude E flat minor Op.39 Nr.5</li>
						<li>Etude D minor Op.39 Nr.8</li>
						</ul>
						</li>
						</ul> 
						<a href="http://www.elztalmuseum.de/">Elztal Museum</a>, Kirchplatz 14, D-79183 Waldkirch, Germany. 17&euro;, 15&euro; (concession), 9&euro; (children)',
						'Skrjabin_Alexander_240.jpg',"Skrjabin_Alexander");
						print rwEv('Sontag 27. Dezember<br/>19.30Uhr',
						'<a href="https://www.facebook.com/events/548766628633166/">
								Poetry and Piano
							</a>',
							'Hymne an die Nacht by Novalis, plus piano pieces by Chopin, Skrjabin and Schumann.
							With Martin Lunz (Spoken Word) and William Cuthbertson (Piano).
							At <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>, 
							Kanderner Strasse 18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg, Germany. 
							Tickets 12 &euro;.',"martinwilliam_240.jpg", "Martin Lunz+William%20Cuthbertson");
						print rwYr(2014);
						print rwEv('Sontag 26.Januar<br/>10.30Uhr', 
						'New Years Concert with William Cuthbertson and Gao Weimo',
						'J.S.Bach, 3 Suites C major(Cello)<br/>
						Cui, Causerie (Piano)
						<br/>
						Liu Zhuang, Romantic piece 
						<br/>
						Xu Xiyi, lullaby (Piano &amp; Cello) <br/>
						W.Cuthbertson. 3 Little Pieces (Cello &amp; Piano)
						<br/>
						F. Chopin, Nocturne in F major Op.15 No.1.  (Piano)<br/>
						F. Chopin, Nocturne in F sharp major  Op.15 No.2  (Piano)<br/>
						P.Tchaikovsky. Rococo Variations Op.33<br/>
						&euro;10 Tickets now available from Jäger und Brommer,  Gewerbekanal 1, Waldkirch. Tel: 07681 3927 (They can be ordered now and picked  up just before  the concert) or from  Buchhandlung Augustiniok, Langestr. 25-29,  Waldkirch. Tel: 07681 409041. (must be picked up on the morning of 25th  January at the latest)
						<br/>
						Orgelbauersaal, Gewerbekanal 1, 79183 Waldkirch, Baden-Württemberg, Germany',
						'William_Weimo_Cello_240.jpg',"Gao%20Weimo+William%20Cuthbertson");
					print rwEv('Donnerstag 30. Januar<br/>20.00Uhr',
						'Eurythmy Hall Concert',
						'<ul>
						<li>C.Cui : &quot;Causerie&quot;    (Piano)</li>
						<li>Liu Zhuang : Romantisches Stück    (Piano und Cello),  Improvisation 1 (Piano und Cello)
						</li>
						<li> W.Cuthbertson: Nocturne (Piano) + Walzes (Piano) +3 Short Pieces(Piano+Cello) +Improvisation 2 (Piano + Cello)
							</li>
						<li>Xu Xiyi :Lullaby  (Piano + Cello)</li>
						<li>F.Chopin: Nocturne F Major  (Piano) Op.15 Nr.1+  Nocturne F# Major (Piano) Op.15 Nr.2
							</li>
						<li> P.Tschaikowski : Rococo Variations (Piano + Cello) Op.33</li>
					</ul>
						<a href="https://www.lahnhoehe.de/start/">Klinic lahnhohe</a>,Am Kurpark 1, 56112 Lahnstein, Germany. 
						Entry Free');
						print rwEv('Sontag 6.April',
						' Trio Recital',
						'With:<ul>
						<li>Margriet van Reisen, Mezzo-soprano; </li>
						<li>Antoine Billet, Cello;  </li>
						<li>William Cuthbertson, Piano</li></ul>
						Elztalmuseum, Waldkirch, Germany.
						Admission: &euro;17 / &euro;15 / Children &euro;9  
						<ul>
						<li>Joseph Glaeser - Four Songs</li>
						<li> Dmitri Shostakovich - Song of Ophelia </li>
						<li>Peter I. Tchaikovsky - Valse sentimental Only he who knows longing </li>
						<li>Alexandr Dargomiskji - Ana Pridjot</li>
						<li> Johannes Brahms - My love is green, down there in the valley, 
						Och Modr, ich well n Ding hahn </li>
						<li> Paul Graener - Three Songs \'A voice and  cello music\' </li>
						<li>Felix Mendelssohn - Songs without Words </li>
						<li>Alphons Diepenbrock - Berceuse</li>
						<li> Jules Massenet - Elegy</li></ul>',
						'cello_240.jpg','Antoine Billet');
					print rwEv(' 24 Juni<br/>20.00Uhr',  
						'Live Music with William Cuthbertson and Carina Kaltenbach',
						'<ul>
						<li>Dvorak Humoresque</li>
						<li>Tchaikovski Sérénade melancolique</li>
						<li>2 Bulgarian Folk Songs, champagne reception.
						</li></ul>
						Reiseb&uuml;ro am Markt/Fiore, Lange Straße 65,Waldkirch, Germany. <br/>
						Admission free, donations for the musicians are welcome',
						 "CorinaKaltenbach_240.jpg","Carina Kaltenbach");
					print rwEv('Dienstag 24.Juni<br/>20.00Uhr',
						'<a href="https://www.facebook.com/#!/events/532745816825705/"  title="Mozart to Bob Dylan">Mozart to Bob Dylan</a>',
						'Waldkirch musicians sing and play music from "Mozart to Bob Dylan" 
						for victims of the fire disaster in Valparaiso with Wolfgang Brommer, William Cuthbertson, Stephan Ronkov, Frauke Hofmann, Carina Kaltenbach, Manuel Torres, Adrian Oswalt and Markus Trenkle.
						Stadtkapelle Waldkirch, Lange Strasse, Germany',
						'benefitconcert_240.jpg',"Mozart to Bob Dylan",
						"https://www.facebook.com/#!/events/532745816825705");
					print rwEv('Sontag 13. Juli<br/>11.00Uhr',
							'Piano Recital with William Cuthbertson',
							'<ul>
						  <li>L.van Beethoven,	Sonate E-flat  major  Op.81a "<em>Les Adieux</em>"	</li>
						   <li>F:Chopin, Berceuse D-flat  major Op.57, Tarantella A-flat  major  Op.43		</li>
						 <li>F.Liszt, Verdi Rigoletto Paraphrase	</li>
						 <li>Glinka, arr. M.Balakirew	<em>"The  Lark"</em></li>
						 <li>E.Granados, <em>The  Maiden and the Nightingale</em> (Goyescas) </li>
						 <li>J.Brahms,	Variations on a Theme of Paganini Op.35 Book 1</li>
						</ul> 
						<a href="http://www.elztalmuseum.de/">Elztalmuseum</A>, Kirchplatz 14, Waldkirch, Germany.
						Entry: 17&euro;/15&euro; Children 9&euro;',
						'williamatpiano_240.jpg',"William Cuthbertson at Piano");
					print rwEv('Sontag 20.Juli<br/>14.00Uhr',
						'<a href="https://www.facebook.com/events/418229254981777/">Open Air Concert with the  Dance Rhythm Orchestra</a>',
						 'At Stadtrainsee, Waldkirch.,
						The Orchestra will play dance music from the 1930s to the 60s.',
						'openair2014_240.jpg','Open Air Concert',
						"https://www.facebook.com/events/418229254981777/");
					print rwEv('Montag 21. Juli<br />20.00Uhr',
							'<a href="https://www.facebook.com/events/747215315337186">Wilhelm Busch Evening with William Cuthbertson and Martin Lunz</a>',
							'Zeltkultur, (the circus tent in the school yard), Elzach, Germany. 
							Advance tickets: bookstore Merkle. Entry: 8/7&euro;.',
							'WilhelmBuschAbend_240.jpg',"Wilhelm%20Busch%20Evening",
							"https://www.facebook.com/events/747215315337186");
					print rwEv('Montag 4.August<br/>20.30Uhr',
						'Informal Concert.',
						'at <a href="http://theislayhotel.com/" title="Islay Hotel">Islay Hotel </a>
							 (Sponsor) 
							 <br/>
							Charlotte Street, Port Ellen, Isle of Islay, Scotland, PA42 7DF',
						'islayhotel.jpg',"Islay Hotel");
	                print rwEv('Wed 6th. August<br/>12.00Uhr',
						'Informal Concert',
						'at <a href="http://www.ardbeg.com">Ardbeg Distillery</a> 
						(Sponsor) 
						<br />
						Port Ellen, Islay, Argyll, Scotland, PA42 7EA',
						'islaycentre.JPG',"Islay Centre","http://theislayhotel.com");
				 print rwEv('Freitag 8.August<br/>19.30Uhr',
						'Concert with William Cuthbertson and Fiona Middleton ("Fiona of the seals") , 
						Violin, Vocals',
						'Works by Franck, Kreisler, Elgar, Faur&eacute;, Liszt, Cuthbertson and Middleton<br/>
						<a href="http://www.islay-gaelic.net/" title="Islay Gaelic Centre">Islay Gaelic Centre (Ionad Chaluim Chille Ìle)</a>, 
						Bowmore,PA43 7LN, Islay, Scotland.<br/>
						Entry: &pound;10 ');
					 print rwEv('Donnerstag 16. Oktober<br/>20.00Uhr',
					 '<a href="http://kulturwoche-waldkirch.de/programm.php"> Poetry and Piano</a> ',
					 '&quot;Time - eternity - Transience: A Journey&quot; / Litera theater, Martin Lutz &amp; William Cuthbertson Orgelbauersaal, Gewerbekanal 1, Waldkirch. Doors open 19:30 | Admission 10 €. A collage of texts to &quot;time-eternity -Transience&quot; paired with piano music by and with William Cuthbertson opens the listeners new spaces, also by connecting the recitations of the actor Martin Lutz. A voice and sound journey This performance is part of the <a href="http://kulturwoche-waldkirch.de/programm.php">Waldkirch Culture Week</a>',
					 "WilhelmBuschAbend_240.jpg","Wilhelm Busch Abend");
					 print rwEv('Sontag 19.Oktober<br/> 11.00Uhr',
						'Musical love time travel &quot;Love through the Ages&quot; with duo <a href="http://www.frauke-hofmann.de">Frauke Hofmann</a> (Mezzo-soprano), and William Cuthbertson (Grand Piano)
						','At Orgelbauersaal Gewerbekanal 1, Waldkirch. 
						The mezzo-soprano Frauke Hofmann and the concert pianist William Cuthbertson provide the theme of love in the musical world over the centuries. Has this changed over time? The journey from the Renaissance to modern times will be presented, including songs, arias, and piano music by Dowland, Bizet, Rachmaninov, Weil and Yiddish Tango, illuminated by music, complemented by explanations, which demonstrates  love.through the ages in a great program, including  &quot;Habanera&quot; from Carmen and &quot;Liebestraum&quot; by Liszt. 
						This performance is part of the <a href="http://kulturwoche-waldkirch.de/programm.php">Waldkirch Culture Week</a>',
						'hoffman_240.jpg',"Frauke Hofmann","http://www.frauke-hofmann.de");
					 print rwYr('2013');
					 print rwEv(' Juli','Concert',
						'<ul>
						<li>F.Schubert, Sonata in B flat major  D 960</li>
						<li>J. Brahms (1833-1897), 6 Piano Pieces.</li>
						</ul>
						Waldkirch, Baden-Württemberg,
						Germany');
					 print rwEv('September 28.<br/>September 29.<br/>17.00Uhr',
						'Klavier Konzert',
						'<ul>
						<li>Schubert Sonate in B flat D 960</li>
						<li>Brahms 6 Piano Pieces Op.118</li>
						</ul>
						Eintrit frei.<br/>
						Elfenau Park, Bern, Switzerland.Elfenauweg 50, 3006 Bern.');
					print rwEv('Oktober 10.<br/>20.00Uhr',
						'<a href="https://www.facebook.com/events/574251399303080">Poems and piano</a>',
						'Poems by Wilhelm Busch. Music by William Cuthbertson. 
						Entry free, collection.
						Haus Sonneneck, Badenweiler.',
						'poemsandpiano_200.jpg','poems and piano',
						'https://www.facebook.com/events/574251399303080');
					print rwEv('Oktober 12. <br/>19.00',
						'<a href="https://www.facebook.com/events/574251399303080">Poems und piano</a>',
						'Poems by Wilhelm Busch,	Music by William Cuthbertson,
						Tickets &euro;10 <br/>
						Orgelbauersaal, Gewerbekanal 1, Waldkirch. Baden-Württemberg,Germany');
				    print rwEv('Mitwoch 6.November <br/>20.00Uhr',
					        '<a href="https://www.facebook.com/events/233043576858233/">Lecture on Wagner and Verdi (Ecumenical Educational Institute)</a>',
							'Dr. Ulrich Ruh (Herder Korespondenz) <br />
						 William Cuthbertson plays Liszt / Wagner Isolde\'s Love Death and Liszt / Verdi Rigoletto. 
						 <br/>
						 Catholic Community Centre, Church Square 7,Waldkirch Baden-Württemberg.
						Germany');
					print rwYr('2012');
					print rwEv('Juli',
						'Concert','<ul>
						<li>	Beethoven Sonata Bflat major Op.106, "Hammerklavier"</li>
						<li> Works by Debussy</li>
						<li>Balakirew, "Islamei" </li>
						</ul>
						Waldkirch');
					print rwEv('Juli','Concert',
					'<UL><LI>Hudié Duo with Sun Yiqi (Violin)</li></ul>	Herbolzheim	');
					print rwEv('Oktober',
					'Opening Concert of the Waldircher Kulturwochen (Arts Festival)',
					'<ul>
					<li>Hudié Duo with Fiona Middleton (Violin)</li>
					<li>Works by Brahms, Franck, Cuthbertson and Middleton.</li>
					</ul>');
					print rwEv('Oktober',
					'Waldircher Kulturwochen (Arts Festival)',
					'Gershwin with the Waldkirch  Brass Ensemble. Waldkirch	Baden-Württemberg,	Germany.',
					'NeuesBild_200.jpg','Waldircher  Kulturwochen');
					print rwEv('November',
					'Tour with Fiona Middleton',
					'Forest Row , inluding the premiére of the Winnie-the-Pooh Suite for violin solo (dedicated to Sun Yiqi) by William Cuthbertson ,
						Stonehouse, Manchester (charity), Liverpool Cathedral, Watford, Wadhurst, St.James Piccadilly, London 
						(Beethoven\'s "Hammerklavier" Sonata)',
						'Img_2402_200.jpg',
						'Nov.26th%202012%20invSt.James,%20Piccadilly,%20London,%20England,%20where%20William%20spielte%20Beethovens%20Hammerklavier-Sonate');
					print rwYr('2011');	
					print rwEv('24.Juli<br /> 
						24.September,<br />
						17.Oktober,<br />
						29.Oktober',
						'<a href="doc/FlyerLiszt2011992_William.pdf">Liszt Concerts</a>',
						'<Ul>
						<Li> Robert Schumann Fantasie in C</Li>
						<Li> Franz Liszt, Sonata in B Minor</Li>
						<Li> Franz Liszt, Hungarian Rhapsody No. 4</Li>
						<Li> Franz Liszt, Liebesträume - Three Nocturnes: No. 1 A flat major, No. 2 in E major, No. 3 A flat major</Li>
						<li> Franz Liszt, Sonetto del Petrarca from Anne de pelerinage , Deuxième Année - Italie</Li>
						<li> Franz Liszt, Vallée d\'Obermann from Anne de pelerinage, Première Année - Suisse</li>
					</Ul>
						Elztalmuseum, Orgelstiung. Gemeindezentrum St.Margarethen, 
						Waldkirch Baden-Württemberg, Germany');
					print rwYr('2010');	
	        		print rwEv('1. März,
						1.April,
						11.Juli, 
						19.September, 8.Oktober',
						'<a href="doc/FlyerChopin.pdf">Chopin Concerts 2010</a>',
						'<ul>
						<li>4 Scherzos,4 Ballades</li>
						<li>Etudes</li>
						<li>Impromptues, Preludes</li>
						<li>14 Waltzes, Barcarolle,Fantasie, Berceuse</li>
						<li>3 Sonatas</li>
						<li>Selected Polonaises,Mazurkas and Nocturnes</li>
						</ul>
						Orgelstiftung, Elztalmuseum, Gemeindezentrum St. Margarethen, WaldkirchBaden-Württemberg, Germany' 
						);?>
	  
					</table>
             </div>
	   </main>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>