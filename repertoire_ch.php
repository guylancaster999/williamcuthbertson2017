<?php
	require "funcz/functionz.php";
	print head("ch","剧目");
	require "grepertoire_e.php";
	$x 		= json_decode($repertoire,true);
	$sz		= count($x["repertoire"]);     
 ?>
<body>
 <div class="container">
  <div class="row">
    <div <?php  mnuClass(); ?> >  
			<?php print menu("ch","剧目","repertoire_e.php","repertoire.php","repertoire_ch.php");?>
	</div>	  
      <div <?php  mainClass(); ?>>
		<?php print shead1("剧目");?>       
           <main>
  <?php
			for ($i=0;$i<$sz;$i++)
			{ 
				echo "<article>";
				$y 		= $x["repertoire"][$i];
				$img	= $y["img"];
				$imgttl	= $y["imgttl"];
				$ttl	= $y["ttl"];
				$ttllink= $y["ttllink"];
				$pieces	= $y["pieces"];
				 echo "<a href=\"".$ttllink."\"><h3><b>".$ttl."</b></h3></a>";	
				echo '<img class="picturerightfs img-responsive img-rounded" width="160" src="img/'.$img.'" alt="'.$imgttl.'">';
				echo "<ul>";	
				 
				for ($j=0;$j<count($pieces);$j++) 
				{
					echo "<li>". $pieces[$j]."</li>";
				}
				echo "</ul>";
				echo '</article><br class="brclear" >';	
			}
?>

				</main>
		<?php print foot();	?>	   
		 
		 </div>
		  	</div>
			</div>	
			 
	<?php  print endPage();?>
</body>
</html>