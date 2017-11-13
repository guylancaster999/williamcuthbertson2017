<?php
	require "funcz/functionz.php";
	print head("de","Homepage","index.php");
?> 
<body>
  <div class="container">
  <div class="row">
    <div <?php  mnuClass(); ?> >  
		 <?php print menu("de","Unterricht","teaching_e.php","teaching.php","teaching_ch.php");?>
	</div>	  
      <div <?php mainClass(); ?>>
		<?php print shead1("Unterricht");?>        
	 		   <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">   
			<article>
				<h3>Klavierunterricht, Coaching und Begleitung</h3>
			      <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12">         
                     <?php photorightnolink("foto3_240.jpg", "William%20Cuthbertson%20mit%20student%20am%20Peter Feuchtwanger MeisterKurz");?>

	 				<ul style="margin-left:-30px; ">
						<li  >Verfügt über einen weitreichenden Erfahrungsschatz im Bereich Klavierunterricht mit Schüler und Schülerinnen alle Altersstufen. 
						<br/><br/>
						</li>
						<li>Anfängerschulung bis hin zum Coaching professioneller Pianisten 
						<br/><br class="brclear"/>
						</li>
						<li>Begleitung und musikalisches Coaching anderer Instrumente  
						<br/><br class="brclear"/>
						</li>
						<li>mit seinen differenzierten methodischen Kenntnissen geht er auf die individuellen Bedürfnisse seiner Schüler ein und fördert sie  in die gewünschte  Richtung.<br/><br/>
						</li>
						<li>Vermittelt eine natürliche und individuelle Klaviertechnik – Unterrichtet die Klavierübungen von Prof. Peter Feuchtwanger.
						<br/><br class="brclear"/>
						</li>
						<li><?php  photorightnolink("Alban6_240.JPG","William (Klavier) begleitet Alban (Waldhorn)");?>
						Durch die Analyse des musikalischen Sinns, Strukturen und Intentionen der einzelnen Werke und die Überlegung wie diese auf die Hörer wirken, hilft William Cuthbertson  seinen Schülern die Stücke zu gestalten und einen schönen Klang  zu erzeugen.
						<br/><br/></li>
					</ul>
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