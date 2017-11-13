<?php
	require "funcz/functionz.php";
	print head("en","Contact","kontakt_ty_e.php");
?> 
<body>
  <div class="container">
  <div class="row">
    <div  <?php mnuClass();?> >  
			<?php print menu("en","Contact","kontakt_e.php","kontakt.php","kontakt_ch.php");?>
	</div>	  
      <div  <?php mainClass();?> >
		<?php print shead1("Contact");?>       
 	 	    <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
			   <?php photorightnolink("FotoChopinKonzertSept2010_350.jpg","William%20Cuthbertson%20-%20Chopin%20Konzert%20Sept%202010");?>
 						<table class="table">
							<tr>
							<td><strong>Post</strong></td>
							<td><strong>:</strong></td>
							<td>William Cuthbertson<br/>
							Theodor-Heuss-Str.16<br/>
							79183 Waldkirch<br/>
							Baden-Württemberg<br/>
							Deutschland</td>
							</tr> 
							<tr>
  							<td><strong>Tel.</strong></td>
  							<td><strong>:</strong></td>
  							<td><a href="tel:+497681409260">0049 76 81 40 92 60</a></td>
              </tr>
		<tr>
						<td><strong>E-Mail</strong></td>
  							<td><strong>:</strong></td>
						<td><a href="mailto:w.cuthbertson@gmx.de" target="_blank">w.cuthbertson@gmx.de</a></td>
              </tr>
            </table>
						<br>
						<div class="alpha">Thankyou for your message - I will contact you as soon as possible. </div>
				
                </div>
		</div>
				</main>
		<?php print foot();	?>	   
		 
		 </div>
		  	</div>
			</div>	
			</div>
		</div>
		  
	<?php  print endPage();?>
</body>
</html>

