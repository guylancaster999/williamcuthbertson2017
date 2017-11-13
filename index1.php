<?php
	require "funcz/functionz.php";
	print head("de","Homepage","index.php");
?> 
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Homepage",'index_e.php','index.php','index_ch.php');?>
         </div>
         <div id="page-content-wrapper">
            <div class="container-fluid">
			<?php topRight(); 
       	     shead('Homepage');?> 
			 <main>
             <div class="row">
               <div class="col-lg-12">
                <?php photocenter("frontpagephoto1.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
            </div>
			
			<div class="row">
               <div class="col-lg-12">	
				<ul>
					<li>
						<article>
							<h4>Samstag 1.April 2017 : Liszt Konzert mit William Cuthbertson und Stephan Ronkov</h4>
				<ul>
						<li>F.Liszt, Fantasie und Fuge &uuml;ber den Choral &quot;Ad nos, ad salutem undam&quot; f&uuml;r Orgel
						</li>
						<li>F.Liszt, Sonate H-Moll für Klavier
						</li>
					</ul>
					<a href="http://www.ksew.de/cms/website.php?id=/w/index.htm">Kirche St.Margarethen</a>, Waldkirch.
					<br/>
					<br/>
						</article>
					</li>	
					
								
					<li><article>Sontag 9. Juli 2017, 11 Uhr
					<h4>Klavier Matinée</h4>
					 <ul>
						<li>Johann Sebastian Bach, Partita C-Moll</li>
						<li>Franz Schubert,	Sonate A-Dur</li>
						<li>Maurice Ravel, Pavane pur une infante défunte, Valses nobles et sentimentales, Albordo del Gracioso</li>
					 </ul>	
					 Elztalmuseum, Waldkirch.</article>
					 <br/><br/>
					</li>
			
		    <li><article>
				Samstag 9, Sonntag 10 September 2017, 17.00 Uhr 
				<h4>Konzert</h4>
				<ul>
					<li>J.S.Bach, Goldberg Variationen</li>
				</ul>
				 <a href="http://www.elfenaupark.ch/">Elfenau Park</a>  Bern, Schweiz.
				 </article>
				 <br/> <br/>
				</li>

					
				<li><article>
					Sontag 8. Oktober 2017, 17 Uhr
					<h4>Konzert</h4>
					<ul>
						<li>J.S. BAch, Goldberg Variationen</li>
					</ul>
					
					<a href="http://www.gutshof-guentert.de/">Gutshof G&uuml;ntert</a>, Schloßgasse 4, 79295 Sulzburg-Laufen
					</article>
					<br/>
					<br/>
				</li>
		
				<li><article>
				<h4>Montag 30 Oktober&ndash;Samstag 4 November 2017 <a href="meisterkurse.php">Peter Feuchtwanger Klavier Meisterklasse</a></h4>
				   <ul>
						<li>Details folgen.</li>
					</ul>
			    Waldkirch.</article>
			    <br />
			    <br/>
			   </li>

				<li><article>
				<h4>2017 Konzertprogramm</h4> 
				<ul class="square">
					<li>Klicken Sie  <a href="program.php" title="2017 Klavier Program"><strong>hier</strong></a>
				 	</li>
				</ul>
				</article>
				</li>
				
					
				</ul>
			</div>
			</div>
           </main>
						
			</div>
		</div>
		 </div>
	<?php print foot();	?>
	<?php  print endPage();?>
</body>
</html>
