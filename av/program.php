&nbsp<?php 
<?php 
require "funcz/functionz.php";
print head("de","Program");
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
    <div id="wrapper"> 
        <div id="sidebar-wrapper">
            <?php print  menu("de","Program","program_e.php","program.php","program_ch.php");?>
         </div>
        <div id="page-content-wrapper">
            <div class="container-fluid"> 
			<?php topRight("program_e.php","program.php","program_ch.php");              
            shead('Program'); ?>
		<main>
		<article>
		   <?php rwyr('2017');?>
			<div class="row">
			<div class="col-lg-8 col-8 col-sm-8">
				    <?php print rwcp('<b>Program 1</b>','&nbsp;').
					            rwcp('J.S. Bach','Goldberg Variationen').
						        rwcp().rwcp('<b>Program 2</b>').
								rwcp('J.S. Bach','Partita C-Moll BWV 826').
								rwcp('&nbsp;','Sonate A-Dur D 664').
                                rwcp('M. Ravel','Pavane pur une infante défunte<br/>
								Valses nobles et sentimentales<br/>Albordo del Gracioso');?>
 					</div>
					<div class="col-lg-4 col-4 col-sm-4">
						<?php photorightlinked("klavier.jpg","Bechstein Piano Repair","http://bechstein.com/");?>
					</div>
			</div>
		</article>
	    <article>
			<?php rwyr('2016');?>
			  <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-8">
					 <?php print rwcp('L.van Beethoven','Sonate Es-Dur Op.31 Nr.3').
					             rwcp('&nbsp;','Sonata fur violin und piano No.5 Fmajor Op.24').
					             rwcp('F.Chopin','3 Mazurken Op.59').
								 rwcp('&nbsp;','Sonate Nr.2 b-Moll Op. 35').
					             rwcp('C. Cui','Causerie').
								 rwcp('W.Cuthbertson','Butterfly Bounce No.1').
						         rwcp('A.Dvorak','Humoresque').
								 rwcp('C.Franck','Sonata for violin and piano A major').
						         rwcp('F.Kreisler','Sch&ouml;n Rosmarin').
						         rwcp('F.Liszt','Sonnetto 104 del Petrarca').
								 rwcp('&nbsp;',"Les Jeux d'eaux à la Villa d'Este").
								 rwcp('S. Rachmaninow','Prelude D-Dur Op.23 Nr.4').
								 rwcp('G. Rossini','&quot;Semiramide&quot; Overture, arr. Czerny, für 16 Pianisten auf 8 Klaviere').
					             rwcp('F.Schubert','Impromptu Ges-Dur Op.90 Nr.3').
								 rwcp('&nbsp;','Impromptu B flat major Op.142 No.3').
								rwcp('R. Schumann','Etudes Symphoniques Op.13').
								rwcp('A.Skrjabin','Sonate Nr.2 Op.19');?>
					</div>		
				<div class="col-lg-4 col-4 col-sm-4">
					<?php photorightnolink ("m.Grandpiano.jpg","GrandPiano");?>
				</div>
			</div>	
		</article>
		<article>	
			<?php rwyr('2015');?>
	 		<div class="row">
                 <div class="col-lg-8 col-8 col-sm-8">
                     <?php rwcp('L.van Beethoven','Sonate Es-Dur Op.81a &quot;Les Adieux&quot;').
					 rwcp('F. Chopin','24 Preludes Op.28').
					 rwcp('&nbsp;','Tarantella As-Dur Op.43').
					rwcp('M.Glinka','&quot;Die Lerche&quot; arr. M.Balakirew').
					rwcp('E.Granados ','Das Mädchen und die Nachtigall (aus Goyescas)').
					rwcp('F.Liszt','Verdi Rigoletto Fantasy').
					rwcp('S.Rachmaninow ','Polka de W.R.').
					rwcp('&nbsp;','Prelude D-Dur Op.23 Nr.4').
					rwcp('&nbsp;','Prelude G-Moll Op.23 Nr.5').
					 rwcp('&nbsp;','Prelude C-Moll Op.23 Nr.7').
					 rwcp('A.Scriabin','Etude E-Dur Op.8 Nr.5').
					 rwcp('&nbsp;','Etude Gis-Moll Op.8 Nr.9').
					rwcp('&nbsp;','Etude B-Moll Op.8 Nr.11').
					rwcp('&nbsp;','Etude Dis-Moll Op.8 Nr.12').
					rwcp('&nbsp;','Etude Fis-Dur Op.42 Nr.4').
					rwcp('&nbsp;','Etude Cis-Moll Op.42 Nr.5').
					rwcp('&nbsp;','Etude Des-Dur Op.42 Nr.6').
					rwcp('&nbsp;','Etude F-Moll Op.42 Nr.7').
					rwcp('&nbsp;','Klavier Konzert in  in fis-moll, Op. 20').
					rwcp('&nbsp;','24 Preludes Op.11').
					rwcp('&nbsp;','Sonate Nr.2 Op.19').
					rwcp('&nbsp;','Sonate Nr.4 Op.30');?>
				</div>
				<div class="col-lg-4 col-4 col-sm-4">
						<?php photorightlinked("piano6.jpg","Klavier Neumeyer","http://www.lepthien.de/");?>
				</div>
				</div>
 		</article>
		<article>	
				<? rwyr('2014');?>
                <div class="row">
                 <div class="col-lg-8 col-8 col-sm-8">
					<?php rwcp('L.van Beethoven','Sonate Es-Dur Op.81a &quot;Les Adieux&quot;').
					      rwcp('F.Chopin','Berceuse Des-Dur Op.57 ').
						  rwcp('&nbsp;','Tarantella As-Dur Op.43').
					      rwcp('F.Liszt','Verdi Rigoletto Paraphrase ').
					      rwcp('M. Glinka','&quot;Die Lerche&quot;, bearb.von M.Balakire').
					      rwcp('E.Granados','Das M&auml;dchen und die Nachtigall (aus Goyescas) ');
					      rwcp('J.Brahms','Variationen über ein Thema von Paganini Op.35 Heft 1');?>
           </div>
			<div class="col-lg-4 col-4 col-sm-4">
				<?php photorightnolink ("m.piano2014.jpg","Piano");?>
			</div>
		</div>
		</article>
		<article>	
		<?php rwyr('2013');?>
             <div class="row">
                 <div class="col-lg-8 col-8 col-sm-8">
                     <?php rwcp('F.Schubert','Sonate B-Dur D 960').
						rwcp('J.Brahms','Klavierstücke Op.118');?>
					 </div>
						  <div class="col-lg-4 col-4 col-sm-4">
								<?php photorightnolink ("clavichord1.jpg","Clavichord");?>
					</div>
			</div>
		</article>
		<article>	
			<?php rwyr('2012');?>
                <div class="row">
                 <div class="col-lg-8 col-8 col-sm-8">
                      <?php 
					  rwcp('C.Debussy','Auswahl Stücke').
						 rwcp('M.Balakirew','Islamei &ndash; Orientalische Fantasie');?>
					</div>
				  <div class="col-lg-4 col-4 col-sm-4">
						<?php photorightnolink ("virginal.jpg","Virginal");?>
					</div>
				</div>
		</article>
		<article>	
			 <?php rwyr('2011');?>
			     <div class="row">
                 <div class="col-lg-8 col-8 col-sm-8">
                     <?php rwcp('R.Schumann','Fantasie C-Dur');
							rwcp('F.Liszt','Sonate H–Moll').
							rwcp('&nbsp;',' Ungarische Rhapsodie Nr.4').
							rwcp('&nbsp;','Liebesträume – Drei Notturnos: Nr.1 As-dur, Nr.2 E-dur, Nr.3 As-dur').
							rwcp('&nbsp;','Sonetto del Petrarca aus Annés de pelerinage,Deuxième Année-Italie').
							rwcp('&nbsp;',"Vallée d'Obermann aus Annés de pelerinage,Première Année-Suisse");?>
					</div>
					<div class="col-lg-4 col-4 col-sm-4">
						<?php photorightlinked("concert-grand_400.jpg","Yamaha Concert Grand","http://www.gandrremovals.co.uk/");?>
					</div>
					</div>					
				<?php rwyr('2010');?>	 
        </article>
		<article>	
		<div class="row">
             <div class="col-lg-8 col-8 col-sm-8">
                 <?php rwcp('F.Chopin','Die 4 Scherzi<br/> die 4 Balladen<br/>
						Sämtliche Etuden<br/>
						Die Impromptus<br/>Die Preludes<br/>
						14 Walzer<br/>Die Barcarolle<br/>Die Fantasie<br/>Die Berceuse<br/>
						Die 3 Sonaten<br/>
						Ausgewählte Polonaisen,Mazurken und Nocturnes
						');?>
					</div>
					<div>
					<div class="col-lg-4 col-4 col-sm-4">
						<?php photorightnolink("BentsideSpinnet.jpg","Bentside Spinnet");?>
					</div>
				 </div>
				</article>
		 		 </main>
			<div class="row">
				<div class="col-12">
					<?php print foot(); ?>
				</div> <!--col-->
               </div> <!--row-->
			</div> <!-- container -->
        </div>   <!-- /#page-content-wrapper -->
		
		</div> 
				<?php print endPage();?>
		</body>
</html>