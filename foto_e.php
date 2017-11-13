<?php
	require "funcz/functionz.php";
	print head("en","Program");
 session_start();
require "pics_e.php";
 	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
 ?>
 <body> 
 <div class="container">
  <div class="row">
    <div  <?php mnuClass();?>   >  
		<?php print menu("en","Photographs","foto_e.php","foto.php","foto_ch.php");?>
	</div>	  
     <div  <?php mainClass();?> >
		<?php print shead1("Photographs");?>   
 		   <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
			       			   <article>
			 	<? 
				$ctr=999;
				for ($i=0;$i<$sz;$i++)
					{ 	
						$y 			= $x["gallery"][$i]; 
						$picSmall	= $y["picSmall"];
						$picLarge	= $y["picLarge"];
						$flag		= $y["flag"];
 						switch($flag)
						{case "T":
							$grpTtl		= $y["picTtl"];					
							if ($ctr<999)print "</div>";
							print '<h3>'.$grpTtl.'</h3>
							<div class="row rowBorder">';
							$ctr=0;
							break;
						default:
				 			$picTtl		= $y["picTtl"];					
							$ctr++;
							
							if ($ctr>5)
							{
								print '</div>';
								print '<div class="row rowBorder">';
								$ctr = 1;
							}
							print '<div class="col-lg-2 col-md-2 col-sm-2 bordered">';
							displayPic($i,"foto_e.php","en",$gpics);
							print "</div>";
				 		}
					}
					?>
						</div>			
						<div class="alpha">Click here to see photos full sized</div>
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