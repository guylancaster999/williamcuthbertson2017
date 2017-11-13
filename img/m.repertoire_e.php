<?php 
require "funcz/m.functionz.php";
print head("en","repertoire","repertoire_e.php","Y");

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
?>
<body>
<div data-role="page" id="pageone">
	<div data-role="header">
       <?php print  top("en","Repetoire","Repetoire");?>
	</div>
	<div data-role="main" class="ui-content">
		<table>
<?php
    echo rep("I.Albeniz",
				"Albeniz.jpg",
				"I.Albeniz:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Isaac_Alb%C3%A9niz",
		array("Pieces from Iberia (arr.2001)",
			"Tango, arr.Godowski"));
	
	echo rep("J.S.Bach","m.Johann_Sebastian_Bach.jpg","Johann%20Sebastian%20Bach:%20Photo:Wikipedia",
		"http://en.wikipedia.org/wiki/Johann_Sebastian_Bach",
		array("Partita Nr. 1 B flat major",
				"Partita Nr. 6 E minor",
				"Preludes and fugues from the Well-Tempered Clavier Book 1: C major, C minor, C# major, C sharp minor, D major, D minor, E-flat, E-flat minor, E major, F minor, G major, B-flat, B-flat minor.",
				"Preludes and fugues from the Well-Tempered Clavier Book 2: D major, D minor, E-flat, F minor, F sharp minor, G major, A-flat major",
				"Goldberg Variations BWV 988",
				"Toccata  E minor BWV 914",
				"Italian Concerto BWV 971"));
	echo rep("M.I.Balakirev",
			"Balakirev.jpg","Milij%20Aleksejevic%20Balakirev:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Mily_Balakirev",
			array("Sonate b-moll",
				"Islamey"));
		
		echo rep("L.V.Beethoven","m.Beethoven.jpg",
			"L.V.Beethoven:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Ludwig_van_Beethoven",
		array("Sonata in A Major Op. 2, No. 2",
			"Sonata in C major Op. 2, No. 3",
			"Sonata in E flat major Op. 7",
			"Sonata in C minor Op. 13 &quot;Pathetique&quot;",
			"Sonata in A flat major Op. 26",
			"Sonata in C sharp minor Op. 27, No. 2 &quot;Moonlight&quot;",
			"Sonata in D Major Op. 28",
			"Sonata in C major Op. 53 &quot;Waldstein&quot;",
			"Sonata in F minor Op. 57 &quot;Appassionata&quot;",
			"Sonata in F sharp major, Op. 78",
			"Sonata in A Major Op. 101",
			"Sonata in B Flat Major Op. 106 &quot;Hammerklavier&quot;",
			"Sonata in E major Op. 109",
			"Sonata in A flat major Op. 110",
			"Sonata in C minor Op.111"));

			echo rep("J.Brahms","m.JohannesBrahms.jpg","Johannes%20Brahms:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Johannes_Brahms",
			array("16 Waltzes Op. 39",		
				  "Paganini Variations Book1",
				  "2 Rhapsodies Op.79",
				  "Op.118 No.1, No.2",
				  "Op.119 No.1, No.2"));
		echo rep("F.Chopin","m.Chopin.png","F.Chopin:%20Photo:Wikipedia",
             "http://en.wikipedia.org/wiki/Fr%C3%A9d%C3%A9ric_Chopin",
			 array("The 4 Ballades",
					"The Preludes",
					  "The 3 Sonatas",
					  "The 4 Scherzi",
					  "The etudes",
					  "The Waltz",
					  "selected mazurkas",
					  "selected Nocturnes",
					  "selected Polonaises (also Polonaise-Fantasie and Grande polonaise brillante Andante et Spinato)",
					  "Fantasy",
					  "Barcarolle",
					  "Berceuse",
					  "Tarantella Op.43"));
		echo rep("C.Debussy","m.Claude_Debussy.jpg","Claude%20Debussy:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Claude_Debussy",
			array("Children´s Corner",
			"Preludes: Des pas sur la neige",
			"La fille aux cheveux de lin",
			"La cathédrale engloutie",
			"General Lavine - eccentric",
			"Deux Arabesques",
			"Claire de lune",
			"Reflets dans l'eau (arr. 2001)"));
		echo rep("J.Field",
			"m.John_field.jpg",
			"John%20Field:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/John_Field_(composer)",
			array("Nocturne in A major"));
		echo rep("C.Franck",
				"m.Cesar_Franck.jpg",
				"Cesar%20Franck:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/C%C3%A9sar_Franck",
				array("Variations Symphoniques (Piano und Orchestra)",
				"Prelude, Chorale and  Fugue"));
		echo rep("G.Gershwin","m.George_Gershwin.jpg","George%20Gershwin:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/George_Gershwin",
				array("Rhapsodie in Blue"));
		echo rep("M.Glinka",
				"m.Mikhail_Glinka.jpg",
				"M.Glinka:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Mikhail_Glinka",
				array("&quot;The Lark&quot; arr. M.Balakirew"));
		echo rep("E.Granados",
				"Granados.jpg",
				"Enrique%20Granados:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Enrique_Granados",
				array("The Maiden and the Nightingale (arr. Goyescas)"));
		echo rep("E.Grieg",
				"m.Edvard_Grieg.jpg",
				"E.Grieg:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Edvard_Grieg",
				array(  "Some works from &quot;Lyric Pieces&quot;",
				"Sonata in E minor Op.7",
				"Suite &quot;From Holberg's Time&quot; Op.40"));
			echo rep("J.Haydn",
					"m.Joseph_Haydn.jpg",
					"J.Haydn:%20Photo:Wikipedia",
					"http://en.wikipedia.org/wiki/Joseph_Haydn",
					array("Variations in F minor",
							"Variations in E flat major"));
			echo rep("L.Janacek",
					"m.Janacek.jpg",
					"Janacek-Photo:Wikipedia",
					"https://en.wikipedia.org/wiki/Leo%C5%A1_Jan%C3%A1%C4%8Dek",
					array("On an overgrown path"));
		
		echo rep("F.Liszt","m.Franz_Liszt.jpg","Franz%20List-Photo:Wikipedia","http://en.wikipedia.org/wiki/Franz_List",array(  " Sonata in B minor",
				"Mephisto Waltz",
				"Hungarian Rhapsody Nr.2,4,6",
				"Liebestraume &ndash; Three Notturnos",
				"Valse oubli&eacute;e Nr.1 in Fis&ndash;Dur, Nr.2 in As&ndash;Dur",
				"Consolation Nr.1 in E-Dur, Nr.2 in E-Dur, Nr.3 in Des&ndash;Dur, Nr.4 in Des&ndash;Dur, Nr.5 in E&ndash;Dur, Nr.6 in E&ndash;Dur",
				"Chopin/Liszt Ein Madchens Wunsch",
				"Etudes:La leggierezza,Un sospiro, La campanella, Feux Follets &ndash; Irrlichter (Etude d'execution transcendente Nr. 5) Zwei Konzert Etuden: 1. Waldesrauschen, 2. Gnomenreigen",
				"aus Ann&eacute; de pelerinage
				<ul>
				<li>Premi&egrave;re Ann&eacute;e &ndash; Suisse :Au lac de Wallenstadt, Au bord d'une source, Vallee d'Obermann</li>,
				<li>Deuxi&egrave;me ann&eacute;e: Italie :104th Sonnetto del Petrarca</li>,
				<li>Troisi&egrave;m&eacute; &ndash; Italie :Les jeux d'eaux a la Villa d'Este</li>
				</ul>"));
			echo rep("A.Lyadov","m.Anatoly_Lyadov.jpg","Anatoly%20Lyadov:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Anatoly_Lyadov",array(  "Variations on a Polish Folk Song",
  "Some Preludes"));
			echo rep("F.Mendellsohn","m.Mendelssohn.jpg","Felix%20Mendelssohn:%20Photo:Wikipedia","http://en.wikipedia.org/wiki/Felix_Mendelssohn",array(
				  "Rondo Capriccioso Op.14",
				  "Variations  serieuses Op.54",
				  "Fantasia on 'The Last Rose' Op.15",
				  "Songs without Words:
					<ul>
					<li>Op.19 No.1.2,4,6</li>,
					<li>Op.30 No.1,2,3,6</li>,
					 <li>Op.38 No.2,4,6</li>,
					 <li>Op.53 No.2,4</li>,
					 <li>Op.62 No. 3,6</li>,
					 <li>Öp.67 No. 2,4</li>,
					 <li>Op.102 No.3,5</li>,
					</ul>"));
			echo rep("I.Moscheles","m.Ignaz_Moscheles.jpg","I.Moscheles:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Ignaz_Moscheles",array("Etudes Op. 70 No. 5 and 9"));
			echo rep("W.A.Mozart","m.Mozart.jpg",
			"W.A.Mozart:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart",
			array("Sonata in A minor, K. 310",
				  "Sonata in C major K.330",
				  "Sonata in A major, K.331",
				  "Sonata in F major K.332",
				  "Sonata in B flat major K.333",
				  "Sonata in C Major K.545",
				  "Sonata in B flat major, K.570",
				  "Sonata in D major, K.576",
				  "Variations on &quot;Ah, vous dirai-je, Maman&quot; K.265",
				  "Fantasie in D minor K. 397"));
			
			echo rep("M.Mussorgski",
					"Modest_Musorgskiy.jpg",
					"M.Mussorgski:%20Photo:Wikipedia",
					"http://en.wikipedia.org/wiki/Modest_Mussorgsky",
					array("Pictures at an Exhibition"));
		echo rep("S.Prokofiev","m.Sergei_Prokofiev.jpg","S.Prokofiev:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Sergei_Prokofiev",
			array("Sonate Nr.3 a-moll Op. 28"));
				
		echo rep("S.Rachmaninov",
				"m.Sergei_Rachmaninoff.jpg",
				"Sergei%20Rachmaninoff:%20Photo:Wikipedia",
				"http://en.wikipedia.org/wiki/Sergei_Rachmaninoff",
				array("Sonate b-moll Op. 36 ",
					"Corelli Variationen Op.42",
					"9 Etudes Tableaux Op.39",
					"Etudes Tableaux Nr. 2,5,7 Op.33 ",
					"10 Preludes Op.23",
					"Preludes Nr.1,2,5,7,10,12 Op.32",
					"Klavierkonzert Nr.1",
					"Klaverkonzert Nr. 3 d-moll Op.30"));
		echo rep("M.Ravel",
					"m.Maurice_Ravel.jpg",
					"Maurice_Ravel:%20Photo:Wikipedia" ,
				"http://en.wikipedia.org/wiki/Maurice_Ravel",
				array("Valses nobles et sentimentales",
				"Sonatine",
				"Alborado del grazioso",
				"Jeux d'eau"));
	 
	
			echo rep("F.Schubert","Franz_Schubert.jpg","Franz_Schubert:%20Photo:Wikipedia","http://en.wikipedia.org/wiki/Franz_Schubert",
			array("Sonate H-Dur Op. Posth. 147",
			"Sonate A-Dur Op. Posth. 120",
			"Sonate a-moll Op. Posth. 143",
			"Sonate a-moll Op. 42",
			"Sonate B-Dur D. 960",
			"Wandererfantasie C-Dur Op. 15",
			"Impromptu Es-Dur Op. 90 Nr. 2",
			"Impromptu Ges-Dur Op. 90 Nr. 3",
			"Sechs Moments Musicaux Op. 94 ",
			"Impromptu As-Dur Op. Posth. 142 Nr. 2",
			"Impromptu B-Dur Op. Posth. 142 Nr. 3"));

			echo rep("R.Schumann","Schumann.jpg","Robert%20Schumann:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Robert_Schumann",array("Op.1 Abegg Variations",
				"Op.2 Papillons",
				"Op.7 Tocata",
				"Op.9 Carnival",
				"Op.13 Etudes Symphoniques",
				"Op.15 Kinderszenen",
				"Op.17 Fantasie C-Dur"));
			echo rep("A.Scriabin","m.Skrjabin_Alexander.jpg","Skrjabin%20Alexander:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Alexander_Scriabin",
			array("24 Preludes Op. 11",
				"8 Etudes Op.42",
				"Etudes Op.2 Nr.2,Op.8 Nr.5,11,12, Op.65 Nr.1",
				"Sonata Nr.4",
				"Sonata Nr.5",
				"Sonata Nr.10",
				"Two  Poems",
				"Piani Concerto, Op. 20",
				"Prelude and Nocturne for the left hand",
				"To the flame Op. 72 ",
				"Sonata Nr. 6"));
			echo rep("R.Strauss","m.Richard_Strauss.jpg","Richard_Strauss:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Richard_Strauss",
			array("arr.von Schulz-Evler, An die schöne blaue Donau",
"arr.von Godowski,Fledermaus"));

			echo rep("K.Szymanowski","m.Karol_Szymanowski.jpg","Karol_Szymanowski:%20Photo:Wikipedia","http://en.wikipedia.org/wiki/Karol_Szymanowski",
			array("9 Preludes Op.1"));
			echo rep("P.I.Tchaikovsky","m.Pjotr_I._Tschaikowski.jpg","Pjotr_I._Tschaikowski:%20Photo:Wikipedia",
			   "http://en.wikipedia.org/wiki/Pyotr_Ilyich_Tchaikovsky",
				array("Die Jahreszeiten Op. 37 a",
"Doumka Op. 59"));
			echo rep("C.M. Von Weber","Carl-Maria-Von-Weber.jpg","C.M. Von Weber","https://en.wikipedia.org/wiki/Carl_Maria_von_Weber",array("Sonate Nr. 2 As-Dur"));
			echo rep("A.Zemlinski",
			"m.Zemlinsky.jpg",
			"Alexander_von_Zemlinsky:%20Photo:Wikipedia",
			"http://en.wikipedia.org/wiki/Alexander_von_Zemlinsky",
			array("Ländliche Tänze Op.1 (arr.2001)"));
	?>   
</table>
 </div>
  <div data-role="footer">
     <?php print foot();?>
  </div>
</div> 
</body>
</html>
