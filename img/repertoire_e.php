<?php
	require "funcz/functionz.php";
	print head("en","Program");

function rwcp($c='&nbsp;',$p='&nbsp;')
{
	print'<div class="row">
		    <div class="col-lg-4 col-4 col-sm-4">'.$c.'</div>
		    <div class="col-lg-8 col-8 col-sm-8">'.$p.'</div>
		</div>';
	return;
}	
function rwyr($y)
{
	print '<div class="row">
                 <div class="col-lg-12 col-12 col-sm-12 year"><h4>'.$y.'</h4></div>
			</div>';
	return;
}
 ?>
<body>
 <div class="container">
  <div class="row">
    <div <?php  mnuClass(); ?>>  
			<?php print menu("en","Repertoire","repertoire_e.php","repertoire.php","repertoire_ch.php");?>
	</div>	  
      <div <?php mainClass();?>>
		<?php print shead1("Repertoire");?>       
        <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
		 		<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
	 				<a href="http://en.wikipedia.org/wiki/Isaac_Alb%C3%A9niz">
							<h3>Isaac Albeniz</h3>
					</a>
					<ul style="margin-left:-30px;">
						<li>Pieces from Iberia (ab 2001)</li>
						<li>Tango, arranged by L. Godowski</li>
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php photorightnolink("m.Albeniz.jpg","I.Albeniz:%20Photo:Wikipedia");?> 
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
			   <a href="http://en.wikipedia.org/wiki/Johann_Sebastian_Bach"><h3>Johann Sebastian Bach</h3></A>
 			<ul style="margin-left:-30px;">
				<li>Partita No.1 B flat major</li>
				<li>Partita No 2 c-Minor BWV 826</li>
				<li>Partita No.6 E minor</li>
				<li>Preludes and fugues from the Well-Tempered Clavier Book 1: C major, C minor, C# major, C sharp minor, D major, D minor, E-flat, E-flat minor, E major, F minor, G major, B-flat, B-flat minor.</li>
				<li>Preludes and fugues from the Well-Tempered Clavier Book 2: D major, D minor, E-flat, F minor, F sharp minor, G major, A-flat major</li>
				<li>Goldberg Variations BWV 988</li>
				<li>Toccata  E minor BWV 914</li>
				<li>Italian Concerto BWV 971</li>
			</ul>
					</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("Johann_Sebastian_Bach_240.jpg","Johann%20Sebastian%20Bach-Photo:Wikipedia");?> 
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Mily_Balakirev">
					<h3>Mily Alexeyevich  Balakirev</h3>
				</a>
				<ul style="margin-left:-30px;">
					<li>Sonate B flat minor</li>
					<li>Islamey</li>
				</ul>
					</div>
                 <div class="col-sm-3 col-3">
		<?php photorightnolink("Balakirev.jpg","Milij_Aleksejevic_Balakirev-Photo:Wikipedia");?> 
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Ludwig_van_Beethoven">
					<h3>Ludwig van Beethoven</h3>
				</a>
				<ul style="margin-left:-30px;">
				  <li>Sonata in A Major Op.2, No.2</li>
				  <li>Sonata in C major Op.2, No.3</li>
				  <li>Sonata in E flat major Op. 7</li>
				  <li>Sonata in C minor Op.13 &quot;Pathetique&quot;</li>
				  <li>Sonata in A flat major Op.26</li>
				  <li>Sonata in C sharp minor Op.27, No.2 &quot;Moonlight&quot;</li>
				  <li>Sonata in D Major Op.28</li>
				  <li>Sonate Es-Sharp Op.31 No.3</li>
				  <li>Sonata in C major Op.53 &quot;Waldstein&quot;</li>
				  <li>Sonata in F minor Op.57 &quot;Appassionata&quot;</li>
				  <li>Sonata in F sharp major, Op.78</li>
				  <li>Sonata in A Major Op.101</li>
				  <li>Sonata in B Flat Major Op.106 &quot;Hammerklavier&quot;</li>
				  <li>Sonata in E major Op.109</li>
				  <li>Sonata in A flat Major Op.110</li>
				  <li>Sonata in C minor Op.111</li>
			  </ul>
					</div>
                 <div class="col-sm-3 col-3">
		     <?php photorightnolink("Beethoven_240.jpg","L.V.Beethoven-Photo:Wikipedia");?> 
						</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Johannes_Brahms">
					<h3>Johannes Brahms</h3>
				</a>
				<ul style="margin-left:-30px;">
				  <li>16 Waltzes Op.39</li>
				  <li>Paganini Variations book1</li>
				  <li>2 Rhapsodies Op.79</li>
				  <li>Op.118 No.1, No.2</li>
				  <li>Op.119 No.1, No.2</li>
				</ul>
					</div>
                 <div class="col-sm-3 col-3">
				<?php photorightnolink("JohannesBrahms_240.jpg","Johannes Brahms-Photo:Wikipedia")?>
					</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Fr%C3%A9d%C3%A9ric_Chopin">
						<h3>Frédéric Chopin</h3>
					</a>
				<ul style="margin-left:-30px;">
				  <li>The 4 Ballades</li>
				  <li>The Preludes</li>
				  <li>The 3 Sonatas</li>
				  <li>The 4 Scherzos</li>
				  <li>The Etudes</li>
				  <li>The Waltz</li>
				  <li>selected mazurkas</li>
				  <li>selected Nocturnes</li>
				  <li>selected Polonaises (also Polonaise-Fantasie and Grande polonaise brillante Andante et Spinato)</li>
				  <li>Fantasy</li>
				  <li>Barcarolle</li>
				  <li>Berceuse</li>
				  <li>Tarantella Op.43</li>
				</ul>
					</div>
                 <div class="col-sm-3 col-3">
	 <?php photorightnolink("chopin1_240.png","Frederic Chopin");?>	</div>
			</div>
			</article>
			<article>
			
			 	<div class="row rowBorder">
					<div class="col-sm-9 col-md-9">
						<a href="https://en.wikipedia.org/wiki/C%C3%A9sar_Cui"><h3>Cesar Cui	</h3></a>
						<ul style="margin-left:-30px;"> 
							<li>Causerie</li>
						</ul>
					</div>
					<div class="col-sm-3 col-md-3">
						<?php photorightnolink("CesarCui_240.jpg","Cesar Cui");?>
					</div>
				</div>
</article>
			<article>
			
			
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
							<h3>William Cuthbertson	</h3>
					<ul style="margin-left:-30px;"> 
				<li>	Fantasy on the Gregorian chorale "Videns dominus...Lazare veni foras" for organ and piano</li>
						 
						<li><a href="video_e.php#amarylis">Amaryllis Waltz</a></li>
						<li>Butterfly Bounce No.1</li>
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php photorightnolink("williamatpiano_240.jpg","W.Cuthbertson");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Claude_Debussy">
						<h3>Claude Debussy</h3>
					</a>
				<ul style="margin-left:-30px;">
					<li>Children´s Corner</li>
					<li>Preludes: Des pas sur la neige</li>
					<li>La fille aux cheveux de lin</li>
					<li>La cathédrale engloutie</li>
					<li>General Lavine - eccentric</li>
					<li>Deux Arabesques</li>
					<li>Claire de lune</li>
					<li>Reflets dans l'eau (ab 2001)</li>
				</ul>
					</div>
                 <div class="col-sm-3 col-3">
				<?php photorightnolink("Claude_Debussy_240.jpg","Claude_Debussy%20:%20Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<h3><a href="https://en.wikipedia.org/wiki/Anton%C3%ADn_Dvo%C5%99%C3%A1k">Antonin&nbsp;Dvo&#345;&aacute;k</a></h3>
						<ul style="margin-left:-30px;">
						<li>Humoresque</li>				
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php photorightnolink("advorak_240.jpg","A. Dvorak");?>
				</div>
			</div>
			</article>
			
			
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="https://en.wikipedia.org/wiki/Pietro_Antonio_Fiocco"><h3>Pietro Antonio Fiocco</h3></a>
				<ul style="margin-left:-30px;">
					<li>Allegro</li>
					</ul>
			 </div>
                 <div class="col-sm-3 col-3">
			    <?php photorightnolink("fiocco.jpg","Fiocco");?>
				</div>
			</div>
			
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
							   <A href="http://en.wikipedia.org/wiki/John_Field_(composer)"><h3>John Field</h3>
				</A>
				<ul style="margin-left:-30px;">
					<li>Nocturne in A major</li>
				</ul>
					</div>
                 <div class="col-sm-3 col-3">
			   <?php photorightnolink("John_field_240.jpg","John%20Field-Photo:Wikipedia");?>
				</div>
			</div>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/C%C3%A9sar_Franck">
								<h3>Cesar Franck.</h3>
							</a>
							<ul style="margin-left:-30px;">
								<li>Variations Symphoniques (Piano und Orchestra)</li>
								<li>Prelude, Chorale and Fugue</li>
								<li>Sonata for violin und piano A major</li>
							</ul>
					</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("Cesar_Franck_240.jpg","Cesar%20Franck-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<A href="http://en.wikipedia.org/wiki/George_Gershwin">
								<h3>George Gershwin</h3>
							</A>
							<ul style="margin-left:-30px;">
								<li>
									<?php linkedPhoto("Rhapsodie in Blue","Gershwin2.JPG","Repertoire","repertoire_e.php","en");?>
								</LI>
							</ul>
										</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("m.George_Gershwin.jpg","George%20Gershwin-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<A href="http://en.wikipedia.org/wiki/Mikhail_Glinka">
								<h3>Mikhail Glinka</h3>
							</A>
							<ul style="margin-left:-30px;">
							  <li>&quot;The Lark&quot; arr. M.Balakirew</li>
							</ul>
									</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("Mikhail_Glinka_240.jpg","Mikhail%20Glinka-Photo:Wikipedia");?>
				</div>
			</div>
			 </article>
			<article>
			<div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					
				<A href="http://en.wikipedia.org/wiki/Enrique_Granados">
						<h3>Enrique Granados </h3>
				</A>
				<ul style="margin-left:-30px;">
					<li>The Maiden and the Nightingale ( Goyescas)</li>
				</ul>
				</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("Granados.jpg","Enrique%20Granados-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Edvard_Grieg"><h3>Edvard Grieg</h3></a>
				<ul style="margin-left:-30px;">
				  <li>Some works from &quot;Lyric Pieces&quot;</li>
				  <li>Sonata in E minor Op.7</li>
				  <li>Suite &quot;From Holberg's Time&quot; Op.40</li>
				  </ul>
					</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("m.Edvard_Grieg.jpg","E.Grieg-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					   
					<a href="http://en.wikipedia.org/wiki/Joseph_Haydn"><h3>Joseph Haydn</h3></a>
				<ul style="margin-left:-30px;">
				  <li>Variations in F minor</li>
				  <li>Variations in E flat major</li>
				</ul>
					</div>
                 <div class="col-sm-3 col-3">
                   <?php photorightnolink("m.Joseph_Haydn.jpg","J.Haydn-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="https://en.wikipedia.org/wiki/Leo%C5%A1_Jan%C3%A1%C4%8Dek"><h3>Leo&#353; Jan&aacute;&#269;ek</h3></a>
					<ul style="margin-left:-30px;">
						<li >On an overgrown path</li>
					  </ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Janacek.jpg","Janacek-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<h3><a href="https://en.wikipedia.org/wiki/Fritz_Kreisler">Fritz Kreisler</a></h3>
						<ul style="margin-left:-30px;">
						<li>Sch&ouml;n Rosmarin</li>
						</ul>
				</div>
                 <div class="col-sm-3 col-3">
						<?php photorightnolink("Fritz_Kreisler.jpg","Fritz_Kreisler,Photo:Wikipedia");?>
					</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Franz_Liszt"><h3>Franz Liszt</h3></a>
					 <ul style="margin-left:-30px;">
						<li> Sonata in B minor</li>
						<Li>Sonnetto 104 del Petrarca</li>
						<li>Les Jeux d'eaux à la Villa d'Este</li>
						<li>Sonnetto 104 del Petrarca</li>
		 				<li>Mephisto Waltz</li>
						<li>Hungarian Rhapsody No.2,4,6</li>
						<li>Liebestraume &ndash; Three Notturnos</li>
						<li>Valse oubli&eacute;e No.1 in Fis&ndash;Dur, No.2 in As&ndash;Dur</li>
						<li>Consolation No.1 in E-Dur, No.2 in E-Dur, No.3 in Des&ndash;Dur, No.4 in Des&ndash;Dur, No.5 in E&ndash;Dur, No.6 in E&ndash;Dur</li>
						<li>Chopin/Liszt Ein Madchens Wunsch</li>
						<li>Etudes:La leggierezza,Un sospiro, La campanella, Feux Follets &ndash; Irrlichter (Etude d'execution transcendente No.5)
						Zwei Konzert Etuden: 1. Waldesrauschen, 2. Gnomenreigen</li>
					<li>aus Ann&eacute; de pelerinage
					<ul style="margin-left:-30px;">
					<li>Premi&egrave;re Ann&eacute;e &ndash; Suisse :Au lac de Wallenstadt ,Au bord d'une source ,Vallee d'Obermann</li>
					<li>Deuxi&egrave;me ann&eacute;e: Italie :104th Sonnetto del Petrarca</li>
					<li>Troisi&egrave;m&eacute; &ndash; Italie :Les jeux d'eaux a la Villa d'Este</li>
					</ul>
					</li>
					</ul>
				</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Franz_Liszt.jpg","Franz%20List-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Anatoly_Lyadov"><h3>Anatoly Lyadov</h3></a>
					<ul style="margin-left:-30px;">
					  <li>Variations on a Polish Folk Song</li>
					  <li>Some Preludes</li>
					  </ul>
							</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Anatoly_Lyadov.jpg","Anatoly%20Lyadov-Photo:Wikipedia");?>
					</div>
			</div>
			</article>
			
				<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="https://en.wikipedia.org/wiki/Bohuslav_Martin%C5%AF"><h3>Bohuslav Martinu</h3></a>
			<ul style="margin-left:-30px;">
					  <li>3 Arabesken</li>
					  </ul>
				 </div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("Martinu.jpg","Martinu-Photo:Wikipedia");?>
					</div>
			</div>
			</article>
			
			
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Felix_Mendelssohn"><h3>Felix Mendellsohn</h3></a>
					<ul style="margin-left:-30px;">
					  <li>Rondo Capriccioso Op.14</li>
					  <li>Variations  serieuses Op.54</li>
					  <li>Fantasia on 'The Last Rose' Op.15</li>
					  <li>Songs without Words:
						<ul style="margin-left:-30px;">
						  <li>Op.19 No.1.2,4,6</li>
						  <li>Op. 30 No.1,2,3,6</li>
						  <li>Op. 38 No.2,4,6</li>
						  <li>Op. 53 No.2,4</li>
						  <li>Op. 62 No.3,6</li>
						  <li>Öp.67 No.2,4</li>
						  <li>Op. 102 No.3,5</li>
						</ul>
					  </li>
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Mendelssohn.jpg","Felix%20Mendelssohn-Photo:Wikipedia"); ?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Ignaz_Moscheles"><h3>Ignaz Moscheles</h3></a>
					<ul style="margin-left:-30px;">
					<li>Etudes Op.70 No.5, No.9</li></ul>
										</div>
                 <div class="col-sm-3 col-3">
<?php  photorightnolink("m.Ignaz_Moscheles.jpg","I.Moscheles-Photo:Wikipedia"); ?>
									</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart"><h3>Wolfgang Amadeus Mozart</h3></a>
					<ul style="margin-left:-30px;">
					  <li>Sonata in A minor, K.310</li>
					  <li>Sonata in C major K.330</li>
					  <li>Sonata in A major, K.331</li>
					  <li>Sonata in F major K.332</li>
					  <li>Sonata in B flat major K.333</li>
					  <li>Sonata in C Major K.545</li>
					  <li>Sonata in B flat major, K.570</li>
					  <li>Sonata in D major, K.576</li>
					  <li>Sonate G-Major K.379</li> 
					  <li>Variations on &quot;Ah, vous dirai-je, Maman&quot; K. 265</li>
					  <li>Fantasie in D minor K.397</li>
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("Mozart_240.jpg","W.Mozart-Photo:Wikipedia"); ?>
									</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Modest_Mussorgsky"><h3>Modest Mussorgski</h3></a>	
							<ul style="margin-left:-30px;">
							<li>Pictures at an Exhibition</li>
							</ul>
										</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Musorgskiy.jpg","M.Mussorgski-Photo:Wikipedia"); ?>
									</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Sergei_Prokofiev"><h3>Sergei Prokofiev</h3></a>
					<ul style="margin-left:-30px;">
					<li>Sonata No.3 in A minor Op.28</li>
					</ul>
										</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Sergei_Prokofiev.jpg","S.Prokofiev-Photo:Wikipedia"); ?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Sergei_Rachmaninoff"><h3>Sergei&nbsp;Rachmaninov</h3></a>
					<ul style="margin-left:-30px;">
					  <li>Corelli Variations, Op.42</li>
					  <li>Etudes Tableaux Nos.2, 5, 7, Op.33</li>
					  <li>9 Etudes Tableaux Op.39</li>
					  <li>Polka de W.R</li>
					  <li>10 Preludes Op.23</li>
					  <li>Preludes No.1, 2, 5, 7, 10, 12 Op.32</li>
					  <li>Piano Concerto No. 3 in D minor, Op.30</li>
					  <li>Sonata in B flat minor Op.36</li>
					   <li>Piano Concerto Number 1</li>
					  </ul>
									</div>
                 <div class="col-sm-3 col-3">

							 <?php  photorightnolink("m.Sergei_Rachmaninoff.jpg","Sergei%20Rachmaninoff-Photo:Wikipedia"); ?>
									</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Maurice_Ravel"><h3>Maurice Ravel</h3></a>
								<ul style="margin-left:-30px;">
								  <li>Alborado del grazioso</li>
								  <li>Jeux d'eau</li>
								  <li>Pavane pur une infante défunte</li>
								  <li>Sonatine</li>
								  <li>Valses nobles et sentimentales</li>
								  </ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Maurice_Ravel.jpg","Maurice%20Ravel-Photo:Wikipedia"); ?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="https://en.wikipedia.org/wiki/Gioachino_Rossini"><h3>Gioachino Rossini</h3></a>
								<ul style="margin-left:-30px;">
								  <li>"Semiramide" Overture, arr. <A href="https://en.wikipedia.org/wiki/Carl_Czerny">Carl Czerny</a>, for 16 Pianists on 8 Pianos</li>
								</ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("Gioacchino_Rossini.jpg","Gioachino_Rossini-Photo:Wikipedia"); ?>
				</div>
			</div>
			</article>
			<article>
			<div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Franz_Schubert"><h3>Franz Schubert</h3></a>
					<ul style="margin-left:-30px;">
					  <li>Sonata in B major, Op.Posth.147</li>
					  <li>Sonata in A Major Op.Posth.120</li>
					  <li>Sonata in A minor Op.Posth.143</li>
					  <li>Sonata in A minor Op.42</li>
					  <li>Sonata in B flat major, D.960</li>
					  <li>Wanderer Fantasy in C major Op.15</li>
					  <li>Impromptu in E flat major Op.90 No.2</li>
					  <li>Impromptu in G flat major, Op.90 No.3</li>
					  <li>Six Moments Musicaux Op.94</li>
					  <li>Impromptu in A flat major, Op.Posth.142 No.2</li>
					  <li>Impromptu in B flat major Op.Posth.142 No.3</li>
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Franz_Schubert.jpg","Franz%20Schubert-Photo:Wikipedia"); ?>
						</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Robert_Schumann"><h3>Robert Schumann</h3></a>
										<ul style="margin-left:-30px;">
										  <li>Abegg Variations Op.1</li>
										  <li>Papillons Op.2</li>
										  <li>Tocata Op.7 </li>
										  <li>Carnival Op.9</li>
										  <li>Etudes Symphoniques Op.13 </li>
										  <li>Kinderszenen Op.15 </li>
										  <li>Fantasy in C major Op.17</li>
										</ul>
										</div>
                 <div class="col-sm-3 col-3">
<?php  photorightnolink("m.Schumann.jpg","Robert%20Schumann-Photo:Wikipedia");?>
									</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Alexander_Scriabin"><h3>Alexander Scriabin</h3>
							   </a>
						<ul style="margin-left:-30px;">
					  <li>Deux Poèmes</li>
					  <li>24 Preludes Op.11</li>
					  <li>Etudes Op.2 No.2, Op.8, No.5, 11, 12,  Op.42, Op.65 No.1</li>
					  <li>Piano Concerto in F sharp minor, Op.20</li>
					  <li>Prelude and Nocturne for the Left Hand</li>
					  <li>Sonata Nr.2 Op.19</li>
					  <li>Sonata No.4 in F# Major, No.5, No.6, No.10</li>
					  <li>Vers la flamme Op. 72</li>
					</ul>
					</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Skrjabin_Alexander.jpg","Alexander%20Skrjabin-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Richard_Strauss"><h3>Richard Strauss</h3></a>
					<ul style="margin-left:-30px;">
					<li>Arrangement by Schulz-Evler,An die sch&ouml;ne blaue Donau</li>
					<li>Arrangement by Godowski, Fledermaus</li></ul>
										</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Richard_Strauss.jpg","Richard%20Strauss-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
			<a href="https://en.wikipedia.org/wiki/Igor_Stravinsky"><h3>Igor Stravinsky</h3></a>
				<ul style="margin-left:-30px;">
					<li>Mädchenlied</li></ul>
										</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("Igor_Stravinsky.jpg","Igor_Stravinsky-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			
			
			
			
			
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Karol_Szymanowski"><h3>Karol Szymanowski</h3></a>
					<ul style="margin-left:-30px;">
					<li>9 Preludes Op.1</li></ul>
									</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Karol_Szymanowski.jpg","Karol%20Szymanowski-Photo:Wikipedia");?>
				</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Pyotr_Ilyich_Tchaikovsky"><h3>Pyotr Ilyich Tchaikovsky</h3></a>
					<ul style="margin-left:-30px;">
					  <li>The Seasons Op.37</li>
					  <li>Doumka Op.59</li>
					</ul>
									</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Pjotr_I._Tschaikowski.jpg","Peter%20I%20Tschaikowski-Photo:Wikipedia");?>
									</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="https://en.wikipedia.org/wiki/Carl_Maria_von_Weber"><h3>Carl Maria von Weber</h3></a>
					<ul style="margin-left:-30px;">
					<li>Sonate No.2 As-Dur</li></ul>
					 					</div>
                 <div class="col-sm-3 col-3">
					<?php  photorightnolink("m.Carl-Maria-Von-Weber.jpg","Carl-Maria-Von-Weber by After Ferdinand Schimon");?>
					</div>
			</div>
			</article>
			<article>
			 <div class="row rowBorder">
                 <div class="col-sm-9 col-9">
					<a href="http://en.wikipedia.org/wiki/Alexander_von_Zemlinsky"><h3>Alexander von Zemlinski</h3></a>
					<ul style="margin-left:-30px;">
					<li>Rural Dances Op.1 (from 2001)</li>
					</ul>
									</div>
                 <div class="col-sm-3 col-3">
						<?php  photorightnolink("m.Zemlinsky.jpg","Alexander%20von%20Zemlinsky-Photo:Wikipedia");?>
									</div>
			</div>
 			</article>
	   
				   
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

