<?php 
require "funcz/m.functionz.php";
function rep($ttl,$img,$imgttl,$lnk,$list)
{
   $ret='<tr>';
   $ret.='<td valign="top">';
   $ret.='<a href="'.$lnk.'" target="_blank" title="'.$title.'"><h3>'.$ttl.'</h3></a>';
   $ret.='<ul>';
	foreach($list as $v)$ret.='<li>'.$v.'</li>'; 
    $ret.='</ul>';
	 $ret.='</td>
	<td>&nbsp;</td>
	<td>'.dophotorightlinked($img,$imgttl,$lnk).'<br class="brclear"/></td>
	</tr>';
	return $ret; 
};
print head("de","repertoire","repertoire.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
       <?php print  top("de","Repetoire","Repetoire");?>
   </div>
  <div data-role="main" class="ui-content">
    
<table>
<?php 
	echo rep("I.Albeniz",
			"Albeniz.jpg",
				"I.Albeniz:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Isaac_Alb%C3%A9niz",
				array('Stücke aus Iberia',
					'Tango, bearb. L. Godowski')	);
		echo rep("J.S.Bach",
		"m.Johann_Sebastian_Bach.jpg",
		"Johann%20Sebastian%20Bach:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Johann_Sebastian_Bach",
		array('Partita Nr. 1 B-Dur',
		'Partita Nr. 6 e-moll',
		'Einige Präludien und Fugen aus dem Wohltemperiertes Klavier Buch 1 C-Dur, c-moll, Cis-Dur, cis-moll, D-Dur, d-moll, Es-Dur, es-moll, E-Dur, f-moll, G-Dur, B-Dur, b-moll.',
		'Einige Präludien und Fugenaus dem Wohltemperiertes Klavier Buch 2 D-Dur, d-moll, Es-Dur, f-moll, fis-moll, G-Dur, As-Dur',
		'Goldberg Variationen BWV 988',
		'Toccata e-moll  BWV 914',
		'Italienisches Konzert BWV 971'));
	
	echo rep("M.I.Balakirev",
		"Balakirev.jpg",
		"Milij%20Aleksejevic%20Balakirev:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Mily_Balakirev",
		array("Sonate b-moll",
              "Islamey"));

		echo rep("L.V.Beethoven",
					"m.Beethoven.jpg",
					"L.V.Beethoven:%20Photo:Wikipedia",
					"http://en.wikipedia.org/wiki/Ludwig_van_Beethoven",
					array("Sonate A-Dur Op. 2 Nr. 2",
					"Sonate C-Dur Op. 2 Nr. 3",
					"Sonate Es-Dur Op. 7",
					"Sonate c-moll Op. 13 &quot;Pathetique&quot;",
					"Sonate As-Dur Op. 26",
					"Sonate Cis-moll Op. 27 Nr. 2 &quot;Mondschein&quot;",
					"Sonate D-Dur Op. 28",
					"Sonate C-Dur Op. 53 &quot;Waldstein&quot;",
					"Sonate f-moll Op. 57 &quot;Appassionata&quot;",
					"Sonate Fis-Dur Op. 78",
					"Sonate A-Dur Op. 101",
					"Sonate B-Dur Op. 106 &quot;Hammerklavier&quot;",
					"Sonate E-Dur Op. 109",
					"Sonate As-Dur Op. 110",
					"Sonate C-Moll Op.111"));
 		echo rep("J.Brahms",
			"m.JohannesBrahms.jpg",
			"Johannes%20Brahms:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Johannes_Brahms",
			array("16 Walzer Op.39",
			"Paganini Variationen Buch1",
			"2 Rhapsodien Op.79",
			"Op.118 Nr.1, Nr.2",
			"Op.119 Nr.1, Nr.2"));
			
		echo rep("F.Chopin",
		"m.Chopin.png","F.Chopin:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Fr%C3%A9d%C3%A9ric_Chopin",
		array("Die 4 Balladen ","
			Die Preludien ","
			Die 3 Sonaten ","
			Die 4 Scherzi","
			Die Etuden ","
			Die Walzer ","
			ausgewählte Mazurken"," 
			ausgewählte Nocturnes ","
			ausgewählte Polonaisen (auch Polonaise-Fantasie und Andante spinato et Grande polonaise brillante)","
			Fantasie ","
			Barcarolle ",
			"Berceuse",
			"Tarantella As-Dur Op.43")
		);
		
		echo rep("W.Cuthbertson","williamatpiano_240.jpg","W.Cuthbertson",
		"http://cuthbertson.de",
		array("	Fantasy on the Gregorian chorale &quot;Videns dominus...Lazare veni foras&quot; for organ and piano",
		"Amaryllis Waltz",
		"Butterfly Bounce No.1"));
		
		echo rep("C.Debussy","m.Claude_Debussy.jpg","Claude%20Debussy:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Claude_Debussy",
		array("Children's Corner",
		"Preludes: Des pas sur la neige",
		"La fille aux cheveux de lin",
		"La cathédrale engloutie",
		"General Lavine - eccentric",
		"Deux Arabesques",
		"Claire de lune",
		"Reflets dans l'eau (ab 2001)"));
     
	 echo rep("J.Field","m.John_field.jpg","John%20Field:%20Photo:Wikipedia",
	"http://en.wikipedia.org/wiki/John_Field_(composer)",
    array("Nocturne A-Dur"));
	
	echo rep("C.Franck","m.Cesar_Franck.jpg","Cesar%20Franck:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/C%C3%A9sar_Franck",
		array("Variations Symphoniques ( Klavier und Orchester)",
		"Präludium, Choral und Fuge"));
	echo rep("George Gershwin","m.George_Gershwin.jpg","George%20Gershwin:%20Photo:Wikipedia",
	"http://en.wikipedia.org/wiki/George_Gershwin",
	array("Rhapsodie in Blue"));
	echo rep("M.Glinka","m.Mikhail_Glinka.jpg","M.Glinka:%20Photo:Wikipedia",
	"http://en.wikipedia.org/wiki/Mikhail_Glinka",
	array("&quot;Die Lerche&quot; arr. M.Balakirew"));
	echo rep("E.Granados","Granados.jpg","Enrique%20Granados:%20Photo:Wikipedia",
	"http://en.wikipedia.org/wiki/Enrique_Granados",
	array("The Maiden and the Nightingale ( Goyescas)"));
	echo rep("E.Grieg","m.Edvard_Grieg.jpg","E.Grieg:%20Photo:Wikipedia" ,"http://en.wikipedia.org/wiki/Edvard_Grieg",
			array("Einige Werke aus &quot;Lyrische Stücke&quot;",
				  "Sonate e-Moll Op.7",
				  "Suite &quot;Aus Holbergs Zeit&quot; Op.40"));
	echo rep("J.Haydn","m.Joseph_Haydn.jpg","J.Haydn:%20Photo:Wikipedia","http://en.wikipedia.org/wiki/Joseph_Haydn",
			array("Variationen f-moll",
					"Variationen Es-Dur"));
	echo rep("L.Janacek","m.Janacek.jpg","Janacek-Photo:Wikipedia","https://en.wikipedia.org/wiki/Leo%C5%A1_Jan%C3%A1%C4%8Dek",
		array("Auf verwachsenem Pfad"));
	echo rep("F.Liszt","m.Franz_Liszt.jpg","Franz%20List-Photo:Wikipedia","http://en.wikipedia.org/wiki/Franz_Liszt",
     	array(" Sonata in B minor",
				"Mephisto Waltz",
				"Ungarische Rhapsodie Nr.2,4,6",
				"Liebestraume &ndash; Drei Notturnos",
				"Valse oubliee Nr.1 in Fis&ndash;Dur, Nr.2 in As&ndash;Dur",
				"Consolation Nr.1 in E-Dur, Nr.2 in E-Dur, Nr.3 in Des&ndash;Dur, Nr.4 in Des&ndash;Dur, Nr.5 in E&ndash;Dur, Nr.6 in E&ndash;Dur",
				"Chopin/Liszt Ein Madchens Wunsch",
				"Etuden:La leggierezza,Un sospiro, La campanella, Feux Follets &ndash; Irrlichter (Etude d'execution transcendente Nr. 5) Zwei Konzert Etuden: 1. Waldesrauschen, 2. Gnomenreigen",
				"aus Ann&eacute; de pelerinage
				<ul>
				<li>Premi&egrave;re Ann&eacute;e &ndash; Suisse: Au lac de Wallenstadt, Au bord d'une source ,Vallee d'Obermann</li>
				<li>Deuxi&egrave;me ann&eacute;e: Italie :104th Sonnetto del Petrarca</li>,
				<li>Troisi&egrave;m&eacute; &ndash; Italie :Les jeux d'eaux a la Villa d'Este</li>
				</ul>"));
		echo rep("A.Lyadov",
				"m.Anatoly_Lyadov.jpg",
				"Anatoly%20Lyadov:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Anatoly_Lyadov",
				array("Variationen Über ein Polnisches Volkslied",
					"Einige Preludes"));
		echo rep("F.Mendellsohn",
				"m.Mendelssohn.jpg",
				"Felix%20Mendelssohn:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Felix_Mendelssohn",
			array("Rondo Capriccioso Op.14",
				"Variations serieuses Op.54",
				"Fantasie über <i>The last rose</i> Op.15",
				"Lieder ohne Worte :
				<ul>
				<li>Op.19 Nr.1.2,4,6</li>,
				<li>Op.30 Nr.1,2,3,6</li>,
				<li>Op.38 Nr.2,4,6</li>,
				<li>Op.53 Nr.2,4</li>,
				<li>Op.62 Nr.3,6</li>,
				<li>Op.67 Nr.2,4</li>,
				<li>Op.102 Nr.3,5</li></ul>"));			
 		
		echo rep("I.Moscheles","m.Ignaz_Moscheles.jpg","I.Moscheles:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Ignaz_Moscheles",
		array("Etuden Op.70 Nr.5, Nr.9"));
		echo rep("W.A.Mozart","m.Mozart.jpg","W.A.Mozart:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart",
		array("Sonate a-moll KV.310",
				"Sonate C-Dur KV.330",
				"Sonate A-Dur KV.331",
				"Sonate F-Dur KV.332",
				"Sonate B-Dur KV.333",
				"Sonate C-Dur KV.545",
				"Sonate B-Dur KV.570",
				"Sonate D-Dur KV.576",
				"Variationen über &quot;Ah, vous dirai-je, Maman&quot; KV.265",
				"Fantasie d-Moll KV.397"));
		echo rep("M.Mussorgski","Modest_Musorgskiy.jpg","M.Mussorgski:%20Photo:Wikipedia","http://en.wikipedia.org/wiki/Modest_Mussorgsky",
		array("Bilderr einer Ausstellung"));
		echo rep("S.Prokofiev","m.Sergei_Prokofiev.jpg","S.Prokofiev:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Sergei_Prokofiev",
		array("Sonate Nr.3 a-moll Op. 28"));
		echo rep("S.Rachmaninov","m.Sergei_Rachmaninoff.jpg","Sergei%20Rachmaninoff:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Sergei_Rachmaninoff",
			array("Sonate b-moll Op.36",
			 "Corelli Variationen Op.42",
				"9 Etudes Tableaux Op.39",
				"Etudes Tableaux Nr. 2,5,7 Op.33",
				"10 Preludes Op.23 ",
				"Preludes Nr.1,2,5,7,10,12 Op.32",
				"Klavierkonzert Nr.1",
				"Klaverkonzert Nr.3 D-moll Op.30"));
		echo rep("M.Ravel","m.Maurice_Ravel.jpg","Maurice_Ravel:%20Photo:Wikipedia","http://en.wikipedia.org/wiki/Maurice_Ravel",
		array("Valses nobles et sentimentales",
				"Sonatine",
				"Alborado del grazioso",
				"Jeux d'eau"));
		echo rep("F.Schubert","Franz_Schubert.jpg","Franz_Schubert:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Franz_Schubert",
		array("Sonate H-Dur Op.Posth.147",
				"Sonate A-Dur Op.Posth. 120",
				"Sonate a-moll Op.Posth. 143",
				"Sonate a-moll Op.42",
				"Sonate B-Dur D.960",
				"Wandererfantasie C-Dur Op.15",
				"Impromptu Es-Dur Op.90 Nr.2",
				"Impromptu Ges-Dur Op.90 Nr.3",
				"Sechs Moments Musicaux Op.94 ",
				"Impromptu As-Dur Op.Posth.142 Nr. 2",
				"Impromptu B-Dur Op.Posth. 142 Nr. 3"));
		echo rep("R.Schumann","Schumann.jpg","Robert%20Schumann:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Robert_Schumann",
			array("Op.1 Abegg Variationen",
				"Op.2 Papillons",
				"Op.7 Tocata",
				"Op.9 Carnival",
				"Op.13 Etudes Symphoniques",
				"Op.15 Kinderszenen",
				"Op.17 Fantasie C-Dur"));
		echo rep("A.Scriabin","m.Skrjabin_Alexander.jpg","Skrjabin%20Alexander:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Alexander_Scriabin",
		array("24 Preludien Op.11",
				"8 Etuden Op.42",
				"Etuden Op.2 Nr.2,Op.8 Nr.5,11,12, Op.65 Nr.1",
				"Sonate Nr.4 Fis-Dur ",
				"Sonate Nr.5",
				"Sonate Nr.10",
				"Deux Poèmes",
				"Klavier Konzert in fis-moll, Op. 20",
				"Prelude und Nocturne für die linke Hand",
				"Vers la flamme Op.72 ",
				"Sonate Nr.6"));
		echo rep("R.Strauss","m.Richard_Strauss.jpg","Richard_Strauss:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Richard_Strauss",
		array("bearb.von Schulz-Evler,An die schöne blaue Donau",
				"bearb.von Godowski,Fledermaus"));
		echo rep("K.Szymanowski","m.Karol_Szymanowski.jpg","Karol_Szymanowski:%20Photo:Wikipedia",
				"https://en.wikipedia.org/wiki/Karol_Szymanowski",
				array("9 Preludes Op. 1"));
		echo rep("P.I.Tchaikovsky","m.Pjotr_I._Tschaikowski.jpg","Pjotr_I._Tschaikowski:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Pyotr_Ilyich_Tchaikovsky",
			array("Die Jahreszeiten Op. 37 a",
			"Doumka Op. 59"));
		echo rep("C.M. von Weber","Carl-Maria-Von-Weber.jpg","C.M. Von Weber",
			"https://en.wikipedia.org/wiki/Carl_Maria_von_Weber",array("Sonate Nr. 2 As-Dur"));
		echo rep("A.Zemlinski","m.Zemlinsky.jpg","Alexander_von_Zemlinsky:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Alexander_von_Zemlinsky",
			array("Ländliche Tänze Op.1 (ab 2001)"));
		?>
 </table>
 </div>
  <div data-role="footer">
     <?php print foot();?>
  </div>
</div> 
</body>
</html>
