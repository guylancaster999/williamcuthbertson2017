<?php
	require "glinks.php";
	$x 					= json_decode($links,true);
	$sz					= count($x["links"]);     
	require "funcz/functionz.php";
    $linkClass=' class="col-lg-3 col-md-3 col-sm-4" ';
	print head("de","Links","links.php"); 
?> 
<body>
<div class="container">
  <div class="row">
    <div <?php mnuClass();?> >  
		<?php print menu("de","Links","links_e.php","links.php","links_ch.php");?>
	</div>	  
     <div <?php mainClass();?> >
		<?php print shead1("Links");?>   
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
					print "</div>";
					?>
          	</main>
		<?php print foot();	?>	   
		 </div>
	  	</div>
	</div>		 
	<?php  print endPage();?>
</body>
</html>