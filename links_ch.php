<?php
	require "funcz/functionz.php";
	print head("ch","链接");
	require "glinks_e.php";
	$x 					= json_decode($links,true);
	$sz					= count($x["links"]);     
 
 ?>
<body> 
<div class="container">
  <div class="row">
    <div class="col-sm-2 col-md-2 col-lg-2" >  
		<?php print menu("ch","链接","links_e.php","links.php","links_ch.php");?>
	</div>	  
     <div class="col-sm-10 col-md-10 col-lg-10">
		<?php print shead1("链接");?>   
          	 <main class="linktxt">
             <?php
				$ctr=999;
				for ($i=0;$i<$sz;$i++)
					{ 	
						$y 		= $x["links"][$i]; 
						$img	= $y["img"];
						$ttl	= $y["ttl"];
						$href	= $y["href"];
						$ctr++;
						if ($ctr>5)
							{
							if ($ctr<999)	print '</div>';
									print '<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2">
												&nbsp;
										</div>
									</div>';
								print '<div class="row">';
								$ctr = 1;
							}
							print '<div class="col-lg-2 col-md-2 col-sm-2">';
								photolinked($img,$ttl,$href);
							print '<br/><a href="'.$href.'" title="'.$ttl.'"  style="font-size:9pt">'.$ttl.'</a></div>';
					}
					?>
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