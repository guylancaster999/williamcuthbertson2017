 <?php 
session_start(); 
require "pics.php";
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/functionz.php";
print head("de","Fotos");
?>
<body>
 <div class="container">
  <div class="row">
    <div  <?php mnuClass();?> >  
		<?php print menu("de","Fotos","foto_e.php","foto.php","foto_ch.php");?>
	</div>	  
     <div  <?php mainClass();?>>
		<?php print shead1("Fotos");?>   
 		  <main>              
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
							if ($ctr<999)	print "</div></section>";
							print '<section><h3>'.$grpTtl.'</h3>
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
							displayPic($i,"foto.php","de",$gpics);
							print "</div>";
				 		}
					}
					?>
			 </div>
			 </section>
			<div class="alpha">Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
		 </main>
			<?php print foot(); ?>
    </div>
		</div>
		 </div>
 	<?php  print endPage();?>	
</body>
</html>