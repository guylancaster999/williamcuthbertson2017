<?php
	require "funcz/functionz.php";
 	print head("de","Unterricht","kinder.php");
?> 
<body>
 <div class="container">
  <div class="row">
    <div <?php  mnuClass(); ?> >  
		 <?php print menu("de","Unterricht","teaching_e.php","kinder.php","teaching_ch.php");?>
	</div>	  
      <div <?php  mainClass(); ?> >
		<?php print shead1("Kinder");?>     
		    <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
				William Cuthbertson unterrichtet auch Kinder, von Anfängern bis Fortgeschrittene. 		
                 Dabei könnten die Kinder ausser klassischen Stücken auch Stücke aus derm Pop- und Jazzrepertoire kennenzulernen.  
                 Es besteht auch die Möglichkeit <a href="http://gb.abrsm.org/">ABRSM Prufüngen</a> zu machen.
            <h4>Erwachsene (Laien)</h4>
 				 Späteinsteiger und Wiedereinsteiger sind auch herzlich willkommen.
			</div>
			</div>
             <div class="row">
               <div class="col-3 col-sm-3 col-md-3 col-lg-3">
			   <?php photonolink("Vorspiel1_240.jpg", "Foto1 - Kind am Klavier");?>
				</div>
				   <div class="col-3 col-sm-3 col-md-3 col-lg-3">
				   <?php photonolink("Vorspiel2_240.jpg","Foto2 - Kind am Klavier und Kind mit Violine");?>
				</div>
				   <div class="col-3 col-sm-3 col-md-3 col-lg-3">
				   <?php photonolink("Vorspiel3_240.jpg","Foto3 - Kind am Klavier");?>
				</div>
				   <div class="col-3 col-sm-3 col-md-3 col-lg-3">
				   <?php photonolink("Abrsm1-1_240.jpg","Foto4 - Kind am Klavier mit Zertifikat");?>
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