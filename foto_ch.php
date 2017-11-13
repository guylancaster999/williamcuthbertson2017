<?php
	require "funcz/functionz.php";
	print head("ch","照片");
	session_start();
require "pics_ch.php";
session_start();
 $x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]); ?>
<body>
<div class="container">
  <div class="row">
    <div  <?php mnuClass();?>  >  
		<?php print menu("ch","照片","foto_e.php","foto.php","foto_ch.php");?>
	</div>	  
     <div  <?php mainClass();?> >
		<?php print shead1("照片");?>   
  
	 		   <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
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
							displayPic($i,"foto_ch.php","ch",$gpics);
							print "</div>";
				 		}
					}
					?>			 </div>			
     		<div class="alpha">点击图片查看原图</div>
				    </div>
					</div>
				</main>
		<?php print foot();	?>	   
		 
		 </div> 
	 <?php  print endPage();?>
</body>
</html>

